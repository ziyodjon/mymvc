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

    public function query($sql,$params=[]){
        $stmt = $this->db->prepare($sql);
        if(!empty($stmt)){
            foreach($params as $key => $val){
                $stmt->bindValue(':'.$key,$val);
            }
        }
        $stmt->execute();
        return $stmt;

        //return $this->db->query($sql);
    }

    public function row($sql,$params = []){
        $result = $this->query($sql,$params);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function column($sql,$params = []){
        $result = $this->query($sql,$params);
        return $result->fetchColumn();
    }

}