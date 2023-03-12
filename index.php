<?php
require "application/lib/Dev.php";
//use application\core;

// If class file exists Autoload all classes here
spl_autoload_register(function ($class) {
    $path = str_replace('\\','/',$class.".php");
    if(file_exists($path)){
        include $path;
    }
});

$router = new application\core\Router();

$router->run();
