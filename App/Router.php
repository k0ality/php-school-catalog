<?php

namespace App;

use App\Http\Request;

class Router
{
    protected $routes = [];

    public function add($method, $route, $controller, $action)
    {
        $this->routes[$method][$route] = [
            'controller' => $controller,
            'action' => $action,
        ];
    }

    public function resolve(Request $request)
    {
        $method = strtolower($request->getMethod());

        $queryParams = $request->getQueryParams();

        $route = '/';
        if (!empty($queryParams['r'])) {
            $route = '/' . ltrim($queryParams['r'], '/');
        }

        if (!isset($this->routes[$method][$route])) {
            throw new \Exception('Route not found');
        }

        return $this->routes[$method][$route];
    }
}
