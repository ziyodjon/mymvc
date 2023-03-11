<?php
namespace aplication\core;
use aplication\core\View;
abstract class Controller{
    public $route;
    public $view;

    public function __construct($route){
        $this->route = $route;
        $this->view = new View($this->route);
    }
}