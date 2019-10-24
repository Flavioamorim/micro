<?php

namespace App\Controllers;

use Core\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        $this->view->titulo = "Lista de programetes";
        $this->henderView('home/index', 'layout');
    }
}
