<?php
namespace application\lib;
use PDO;
class Db{
    protected $db;
    public function __construct(){
        $config = require_once "application/config/db.php";
        $this->db = new PDO('mysql:host='.$config['hostname'].';dbname='.$config['dbname'].'', $config['dblogin'], $config['dbpass']);
        //$this->db =new PDO("mysql:host=".$config['hostname'].";dbname='".$config['dbname']."'", $config['dblogin'], $config['dbpass']);
    }

    public function query($sql){
        return $this->db->query($sql);
    }

    public function row($sql){
        $result = $this->query($sql);
        return $result->fetchAll();
    }

    public function column($sql){
        $result = $this->query($sql);
        return $result->fetchColumn();
    }

}