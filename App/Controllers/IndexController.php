<?php

namespace App\Controllers;

use App\View\StringView;
use App\View\TemplateView;

class IndexController
{
    public function index()
    {
        return new TemplateView('forms_view', ['title' => 'Testttt', 'content' => 'forms_view']);
    }
}
