<?php
require_once 'vendor/autoload.php';
use Dotenv\Dotenv;
Dotenv::createMutable(dirname(__FILE__))->load();
$pdo = new \PDO("mysql:host=$_ENV[DB_HOST];dbname=$_ENV[DB_NAME]", $_ENV["DB_USER"], $_ENV["DB_PASSWORD"]);
$seeder = new \tebazil\dbseeder\Seeder($pdo);
$generator = $seeder->getGeneratorConfigurator();
$faker = Faker\Factory::create();
// categories
$array = [];
$count = 10;
for ($i = 0; $i < $count; $i++)
{
    $array[] = [$faker->company, $faker->realText()];
}
$columnConfig = ['name','description'];
$seeder->table('categories')->data($array, $columnConfig)->rowQuantity($count);



$array = [];
$count = 100;
for ($i = 0; $i < $count; $i++)
{
    $array[] = [$faker->numberBetween(1,10), $faker->firstName, $faker->realText(), $faker->numberBetween(200, 400), $faker->randomFloat(), $faker->safeColorName];
}
$columnConfig = ['category_id', 'name','description', 'speed', 'amount', 'color'];
$seeder->table('transports')->data($array, $columnConfig)->rowQuantity($count);

$seeder->refill();
