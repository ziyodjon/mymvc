<?php
require "aplication/lib/Dev.php";
//use aplication\core\Router;

// If class file exists Autoload all classes here
spl_autoload_register(function ($class) {
    $path = str_replace('\\','/',$class.".php");
    if(file_exists($path)){
        include $path;
    }
});

$router = new aplication\core\Router();

$router->run();
