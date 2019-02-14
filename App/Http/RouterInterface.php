<?php

namespace App\Http;

interface RouterInterface
{
    public function add(string $method, string $route, string $controller, string $action);

    public function resolve(RequestInterface $request);
}
