<?php
namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller{
    public function indexAction(){
        $news = $this->model->getNews();
        $vars = [
            'news'=>$news,
        ];
        $this->view->render('Main Page',$vars);
    }
}