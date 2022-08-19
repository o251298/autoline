<?php
require_once './../vendor/autoload.php';
require_once '../routes/web.php';
use Dotenv\Dotenv;
use App\Router;
use App\Models\Transport;
Dotenv::createMutable(dirname(dirname(__FILE__)))->load();
//(new Router($routes))->run();
use App\Services\Collection\Collection;
use App\Models\Categorie;
//$collection = new Collection([new Categorie(1,'asd', 'qweq'), new Categorie(2,'asqwed324', 'qwe234q'), new Categorie(3,'qweasd', 'qweasdq')]);
Categorie::all();