<?php


use App\controllers\Router;

require_once '../app/helpers/functions.php';
require_once __DIR__ . '/../vendor/autoload.php';


$router = new Router();

// Path to routes file
require_once base_path('app/routes/routes.php');

$router->handleRequest();
