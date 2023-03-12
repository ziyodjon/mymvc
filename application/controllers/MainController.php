<?php
namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller{
    public function indexAction(){
        $db = new Db();
        $res = $db->query('SELECT name FROM users WHERE id = 1');
        $vars = [
            'name' => 'Ziyodulla',
            'surname' => 'Ibragimov',
        ];

        $this->view->render('Main Page',$vars);
    }
}