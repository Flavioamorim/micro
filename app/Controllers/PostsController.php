<?php

namespace App\Controllers;

use Core\BaseController;

class PostsController extends BaseController
{
    public function index()
    {
        echo "posts website";
    }

    public function show($id, $request)
    {
        echo "posts website show $id" ;
        echo $request->get->nome;
        print_r($request->get);

    }
}
