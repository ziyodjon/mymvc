<?php
namespace application\core;
use application\core\View;
use application\lib\Db;

abstract class Controller{
    public $route;
    public $view;
    public $model;

    public function __construct($route){
        $this->route = $route;
        $this->view = new View($this->route);
        $this->model = $this->getModel($route['controller']);
    }

    public function getModel($name){
        $path = "application\models\\".ucfirst($name);
        if(class_exists($path)){
            return new $path;
        }
    }
}