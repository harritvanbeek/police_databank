<?php 

namespace classes\view;
    defined('_BOANN') or header("Location:{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["SERVER_NAME"]}");

class documentenView{

    private     $_DB           =   NULL;

    public function __construct(){
        $this->_DB             = NEW \classes\core\db;
    }


    public function create($data = []){
        $this->query = "INSERT INTO `documenten` (`ruuid`, `puuid`, `UserUuid`, `title`, `raport`, `postdate`) 
                            VALUES (:ruuid, :puuid, :UserUuid, :title, :raport, :postdate) ";
        return $this->_DB->action($this->query, $data);                            
    }

    public function getAllDocuments($data){
        $this->array = ["uuid" => "{$data}"];
        $this->query = "SELECT * FROM `documenten` WHERE `puuid` = :uuid";
        return $this->_DB->getAll($this->query, $this->array); 
    }

    public function updateDocument($data){}

}