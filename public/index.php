<?php
require_once __DIR__  . '/../vendor/autoload.php';
define(constant_name: '_BASE_', value: realpath(path: __DIR__));

$router = new Bramus\Router\Router();

foreach(glob(__DIR__ . "/../src/router/*.router.php") as $roterfile){
 include_once $roterfile;
}

$router->run();

?>