<?php

namespace core;

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
    protected $routes = [];
    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'method' => $method,
            'controller' => $controller
        ];
    }

    public function get($uri, $controller)
    {
        $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        $this->add('POST', $uri, $controller);
    }
    public function delete($uri, $controller)
    {
        $this->add('POST', $uri, $controller);
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                return require base_path($route['controller']);
            }
        }
        echo 'Not Found';
    }
}