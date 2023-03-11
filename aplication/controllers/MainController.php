<?php
namespace aplication\controllers;

use aplication\core\Controller;
class MainController extends Controller{
    public function indexAction(){
        $vars = [
            'name' => 'Ziyodulla',
            'surname' => 'Ibragimov',
        ];
        $this->view->render('Main page',$vars);
    }
}