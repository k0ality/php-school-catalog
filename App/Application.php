<?php

namespace App;

use App\Http\Request;

class Application
{
    /**
     * @var Router
     */
    protected $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function handleRequest(Request $request)
    {
        $data = $this->router->resolve($request);

        $controllerClass = $data['controller'];
        $controller = new $controllerClass;

        $action = $data['action'];

        $controller->$action($request->getQueryParams());
    }
}
