<?php

namespace core;

use core\Middleware\Middleware;
use core\Middleware\Authenticated;
use core\Middleware\Guest;

class Router
{
    //    public function routeToController($uri, $routes)
    //         {
    //             if (array_key_exists($uri['path'], $routes['admin'])) {
    //                 require $routes['admin'][$uri['path']];
    //             } else if (array_key_exists($uri['path'], $routes['front'])) {
    //                 require $routes['front'][$uri['path']];
    //             } else {
    //                 echo 'not found';
    //             }
    //         }

    // require('routes.php');
    // $uri = parse_url($_SERVER['REQUEST_URI']);

    // routeToController($uri, $routes);
    public $routes = [];
    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'method' => $method,
            'controller' => $controller,
            'middleware' => null
        ];
        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        return $this->add('POST', $uri, $controller);
    }
    public function delete($uri, $controller)
    {
        return $this->add('POST', $uri, $controller);
    }

    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;

        return $this;
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                Middleware::resolve($route['middleware']);
                // return require base_path($route['controller']);
                return require base_path('Http/controllers/' . $route['controller']);
            }
        }
        echo 'Not Found';
    }
}