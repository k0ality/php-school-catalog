<?php

require __DIR__ . '/../bootstrap/bootstrap.php';

$router = require __DIR__ . '/../routes/routes.php';
$app = new \App\Application($router);

$request = new \App\Http\Request();
$app->handleRequest($request);
