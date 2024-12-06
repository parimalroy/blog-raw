<?php
const BASE_PATH = __DIR__ . '/../';

// include('database.php');
// include('validator.php');
// include('function.php');
// include('routes.php');
require BASE_PATH . 'function.php';
// require BASE_PATH . 'config.php';

spl_autoload_register(function ($class) {
    // dd($class);
    require base_path("core/" . $class . ".php");
});

require base_path('route.php');