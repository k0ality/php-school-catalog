<?php

namespace App;

use App\Http\RequestInterface;
use App\Http\RouterInterface;

class Application
{
    /**
     * @var RouterInterface
     */
    protected $router;

    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function handleRequest(RequestInterface $request)
    {
        $data = $this->router->resolve($request);

        $controllerClass = $data['controller'];
        $controller = new $controllerClass;

        $action = $data['action'];

        $controller->$action($request->getQueryParams());
    }
}
