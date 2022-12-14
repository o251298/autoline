<?php

namespace App\Controllers;
use App\Models\Transport;
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

    public function transport(int $id, RouteCollection $routes)
    {
        $transport = Transport::find($id);
        return $this->view('transport', ['transport' => $transport]);
    }

    public function filter(RouteCollection $routes)
    {
        $adapter = new DB();
        $speed = $_GET['speed'];
        $amount = $_GET['amount'];
        $colors = $_GET['colors'] ?? null;
        $smt = $adapter->adapter->select()
            ->from("transports")
            ->where("speed < $speed")
            ->where("amount < $amount");
        if (isset($colors)){
            $colors = implode('\', \'', $_GET['colors']);
            $fin = "'" . $colors . "'";
            $smt->where('color IN ('.$fin.')');
        }
        $select = $smt->query();
        $result = $select->fetchAll();
        return $this->view('index', ['result' => $result]);
    }
}