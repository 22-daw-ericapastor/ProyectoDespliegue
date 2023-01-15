<?php

function template($page, array $data = null)
{
    include 'Views/Header.php';
    include 'Views/' . $page . '.php';
    include 'Views/Footer.php';
}


function controller($controller, $param = null)
{

    $class = explode('\\', $controller);

    $controller = "\\Controllers" . "\\" . end($class);

    if (isset($param)) {

        return new $controller($param);

    }

    return new $controller;

}