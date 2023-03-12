<?php
namespace application\lib;

class Db{

    public function __construct(){
        $config = "application/config/db.php";
        debug($config);
    }
}