<?php
namespace aplication\lib;

class Db{

    public function __construct(){
        $config = "aplication/config/db.php";
        debug($config);
    }
}