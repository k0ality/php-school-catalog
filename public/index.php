<?php

require __DIR__ . '/../bootstrap/bootstrap.php';

$request = new \App\Http\Request();

pd($request->getMethod(), $request->getQueryParams()['r']);
