<?php
namespace aplication\controllers;

use aplication\core\Controller;
use aplication\lib\Db;

class MainController extends Controller{
    public function indexAction(){
        $db = new Db();
        $vars = [
            'name' => 'Ziyodulla',
            'surname' => 'Ibragimov',
        ];

        $this->view->render('Main page',$vars);
    }
}