<?php

namespace App\Controllers;
use App\Services\DataBase\DB;
use App\Services\Redis\RedisClient;
use Symfony\Component\Routing\RouteCollection;
class MainController extends Controller
{
    public function index(RouteCollection $routes)
    {
        $redis = new RedisClient();
        if (!$redis->client->exists("allTransports"))
        {
            $adapter = new DB();
            $select = $adapter->adapter->select()
                ->from(['c' => 'categories'], ['id', 'name', 'description'])
                ->joinLeft(['t' => 'transports'], 'c.id = t.category_id');
            $stmt = $select->query();
            $result = $stmt->fetchAll();
            $redis->client->set('allTransports', serialize($result));
        } else {
            $result = unserialize($redis->client->get('allTransports'));
        }
        return $this->view('index', ['result' => $result]);
    }

    public function category(int $id, RouteCollection $routes)
    {
        $adapter = new DB();
        $select = $adapter->adapter->select()
            ->from(['c' => 'categories'], ['id', 'name', 'description'])
            ->joinLeft(['t' => 'transports'], 'c.id = t.category_id')
            ->where('c.id = ' . $id);
        $stmt = $select->query();
        $result = $stmt->fetchAll();
        return $this->view('index', ['result' => $result]);
    }
}