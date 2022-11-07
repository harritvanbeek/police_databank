<?php 

namespace classes\view;
    defined('_BOANN') or header("Location:{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["SERVER_NAME"]}");

class profileView{

    private     $_DB           =   NULL;

    public function __construct(){
        $this->_DB             = NEW \classes\core\db;
    }


    public function fullProfile($data = ""){
        $this->array = ["search" => "{$data}"];
        $this->query = "SELECT * FROM `profiles` 
                            WHERE `puuid` = :search ";
        return $this->_DB->get($this->query, $this->array);
    }

    public function create($data = []){
        $this->query = "INSERT INTO `profiles` (`puuid`, `citizenid`, `firstname`, `lastname`, `datesofbirth`, `sex`, `nationality`) 
                            VALUES(:puuid, :citizenid, :firstname, :lastname, :datesofbirth, :sex, :nationality)
                        ";
        return $this->_DB->action($this->query, $data);

    }

    public function search($data){
        $this->array = ["search" => "{$data}"];
        $this->query = "SELECT * 
                            FROM `profiles` 
                            WHERE `citizenid` LIKE :search
                                OR `firstname` LIKE :search
                                OR `lastname`  LIKE :search
                        ";
        return $this->_DB->getAll($this->query, $this->array);
    }
}