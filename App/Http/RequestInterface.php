<?php

namespace App\Http;

interface RequestInterface
{
    public function getQueryParams();

    public function getMethod();
}
