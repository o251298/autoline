<?php

namespace App;

use App\Services\Log\Log;

class Router
{
    public string $uri;
    public function getUrl() : Router
    {
        $this->uri = trim($_SERVER["REQUEST_URI"], '/');
        return $this;
    }

    public function run() : string|bool
    {

        $router = require '../routes/web.php';
        $newPath = null;
        $errors = [];
        foreach ($router as $urlPattern => $action)
        {
            if (preg_match("~$urlPattern~", $this->uri))
            {
                $newPath = preg_replace("~$urlPattern~", $action, $this->uri);
                $segments = explode('/', $newPath);
                $class = array_shift($segments);
                $method = array_shift($segments);
                $param = $segments;
                $className = "\\App\\Controllers\\" . ucfirst($class) . 'Controller';
                $methodName = $method;
                if (class_exists($className)){
                    $classObj = new $className;
                    if (method_exists($classObj, $methodName)){
                        call_user_func(array($classObj, $methodName), $param);
                        return true;
                    } else {
                        $errors[] = 'method not exist';
                    }
                } else {
                    $errors[] = 'class not exist';
                }
            }
        }
        if (!empty($errors))
        {
            Log::channel('router')->error("error", $errors);
            require_once '.././views/errors/404.php';
            return false;
        }
        if ($newPath === null)
        {
            Log::channel('router')->error('error');
            return false;
        }
        return false;
    }
}