<?php

namespace App\Controllers;

use App\Services\DataBase\DB;
use App\Services\Redis\RedisClient;
class Controller
{
    public function view(string $page, array $parametrs = []) : void
    {
        $redis = new RedisClient();
        if (!$redis->client->exists('categories'))
        {
            $category = (new DB())->adapter->select()->from('categories')->query()->fetchAll();
            $html = '';
            foreach ($category as $item)
            {
                $html .= <<<HTML
<a href="/category/$item[id]" class="list-group-item list-group-item-action">$item[name]</a>
HTML;
            }
            $redis->client->set('categories', $html);
        }
        $html = $redis->client->get('categories');








        $filters = null;
        if (!$redis->client->exists('filter'))
        {
            $filter = '';
            foreach ($category as $item)
            {
                $html .= <<<HTML
<a href="/category/$item[id]" class="list-group-item list-group-item-action">$item[name]</a>
HTML;
            }
            $redis->client->set('filter', $html);
        }



        if (!empty($parametrs))
        {
            foreach ($parametrs as $key => $value)
            {
                $$key = $value;
            }
        }
        include_once '.././views/' . $page . '.php';
    }
}