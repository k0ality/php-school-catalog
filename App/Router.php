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
        //
    }
}
