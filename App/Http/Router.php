<?php

namespace App\Http;

class Router implements RouterInterface
{
    protected $routes = [];

    public function add(string $method, string $route, string $controller, string $action)
    {
        $this->routes[$method][$route] = [
            'controller' => $controller,
            'action' => $action,
        ];
    }

    public function resolve(RequestInterface $request)
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
