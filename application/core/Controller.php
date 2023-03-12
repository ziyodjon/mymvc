<?php
namespace aplication\core;
use aplication\core\View;
use aplication\lib\Db;

abstract class Controller{
    public $route;
    public $view;

    public function __construct($route){
        $this->route = $route;
        $this->view = new View($this->route);
    }
}