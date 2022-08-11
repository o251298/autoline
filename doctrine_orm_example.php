<?php
require_once 'vendor/autoload.php';
use Dotenv\Dotenv;
use App\Entities\Category;
use App\Entities\Transport;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
Dotenv::createMutable(dirname(__FILE__))->load();

$params = [
    'host'     => $_ENV['DB_HOST'],
    'user'     => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASSWORD'],
    'dbname'   => $_ENV['DB_NAME'],
    'driver'   => 'pdo_mysql',
];


$em = EntityManager::create(
    $params,
    Setup::createAttributeMetadataConfiguration([__DIR__ . '/app/Entities'])
);

$transports = [
    ['Oasd', 'Vcx desc', 300, 100000],
    ['Nnn 12', 'Pxasd desc', 123, 9000],
    ['Pleeqr 001', 'Lesd desc', 150, 10000],
];

$category = (new Category())
    ->setName('Test car')
    ->setDescription('Test car for travel');

foreach ($transports as [$name, $desc, $speed, $amount])
{
    $item = (new Transport())
        ->setName($name)
        ->setDescription($desc)
        ->setSpeed($speed)
        ->setAmount($amount);
    $category->addTransport($item);
    $em->persist($item);

}
$em->persist($category);
$em->flush();
