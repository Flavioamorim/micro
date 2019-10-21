<?php

function imprime($param)
{
    if (is_array($param)) {
        print_r($param);
        exit;
    }
    echo $param;
    exit;
}

require_once __DIR__ . "/../vendor/autoload.php";

require_once __DIR__ . "/../core/Bootstrap.php";