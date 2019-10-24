<?php

namespace Core;

class Container
{
    /**
     *
     * @param [type] $controller
     * @return void
     */
    public static function newController($controller)
    {
        $objController = "App\\Controllers\\". $controller;
        return new $objController;
    }    
}
