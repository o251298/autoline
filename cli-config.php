<?php
require 'vendor/autoload.php';
use Doctrine\Migrations\Configuration\Migration\PhpFile;
use Doctrine\Migrations\DependencyFactory;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Dotenv\Dotenv;
Dotenv::createMutable(dirname(__FILE__))->load();


$config = new PhpFile('migrations.php'); // Or use one of the Doctrine\Migrations\Configuration\Configuration\* loaders
$params = [
    'host' => $_ENV['DB_HOST'],
    'user' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASSWORD'],
    'dbname' => $_ENV['DB_NAME'],
    'driver' => 'pdo_mysql',
];

$entityManager = EntityManager::create(
    $params,
    Setup::createAttributeMetadataConfiguration([__DIR__ . '/app/Entity'])
);
return DependencyFactory::fromEntityManager($config, new \Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager($entityManager));