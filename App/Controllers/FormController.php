<?php

namespace App\Controllers;

class FormController
{
    public function view($params)
    {
        return 'Forms view ' . $params['id'];
    }

    public function index()
    {
        return 'Forms index';
    }

    public function update()
    {
        //
    }

    public function delete($id)
    {
        //
    }
}
