<?php

require __DIR__ . '/../bootstrap/bootstrap.php';

$router = require __DIR__ . '/../routes/routes.php';
pd($router);


$request = new \App\Http\Request();

pd($request->getMethod(), $request->getQueryParams());
