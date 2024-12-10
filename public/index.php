<?php

const BASE_PATH = __DIR__ . '/../';

// include('database.php');
// include('validator.php');
// include('function.php');
// include('routes.php');
require BASE_PATH . 'core/function.php';
// require BASE_PATH . 'config.php';

spl_autoload_register(function ($class) {
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);
    require base_path("{$class}.php");
});

$router = new \core\Router();

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);