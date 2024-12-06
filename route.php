<?php
function routeToController($uri, $routes)
{

    if (array_key_exists($uri['path'], $routes['admin'])) {
        require $routes['admin'][$uri['path']];
    } else if (array_key_exists($uri['path'], $routes['front'])) {
        require $routes['front'][$uri['path']];
    } else {
        echo 'not found';
    }
}

require('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI']);

routeToController($uri, $routes);