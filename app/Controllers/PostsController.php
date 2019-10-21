<?php

namespace App\Controllers;

class PostsController
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
