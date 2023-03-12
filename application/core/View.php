<?php
namespace aplication\core;

class View{
    public $path;
    public $layout = 'default';

    public function __construct($route){
       $this->path = $route['controller']."/".$route['action'].".php";
    }

    public function render($title, $vars = []){
        ob_start();
        extract($vars);
        require "aplication/views/".$this->path;
        $content = ob_get_clean();
        include "aplication/views/layouts/". $this->layout.".php";
    }

    static function errorCode($code){
        http_response_code($code);
        require_once "aplication/views/errors/".$code.".php";
        exit;
    }
}