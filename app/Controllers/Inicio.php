<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Inicio extends BaseController
{
    public function index()
    {
        return view('inicio/inicio');
    }

}

