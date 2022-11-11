<?php 

namespace classes\view;
    defined('_BOANN') or header("Location:{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["SERVER_NAME"]}");

class documentenView{

    private     $_DB           =   NULL;

    public function __construct(){
        $this->_DB             = NEW \classes\core\db;
    }


    public function getList(){
        $this->query = "SELECT * 
                            FROM `documenten` 
                                LEFT JOIN `users`
                                ON `documenten`.`UserUuid` = `users`.`uuid`
                            ORDER BY `documenten`.`postdate` ASC
                        ";
        return $this->_DB->getAll($this->query); 
    }

    public function thisDocument($data = ""){
        $this->select = "
                            `documenten`.`ruuid`,
                            `documenten`.`title`,
                            `documenten`.`raport`,
                            `documenten`.`postdate`,
                            `profiles`.`firstname`,
                            `profiles`.`lastname`,
                            `users`.`name`,
                            `users`.`rank`
                        ";
        $this->query = "SELECT {$this->select} 
                            
                            FROM `documenten` 
                                LEFT JOIN `profiles`
                                ON `documenten`.`puuid` = `profiles`.`puuid`

                                LEFT JOIN `users`
                                ON `documenten`.`UserUuid` = `users`.`uuid`
                                
                            WHERE `documenten`.`ruuid` = '{$data}' ";
        return $this->_DB->get($this->query);
    }

    public function create($data = []){
        $this->query = "INSERT INTO `documenten` (`ruuid`, `puuid`, `UserUuid`, `title`, `raport`, `postdate`) 
                            VALUES (:ruuid, :puuid, :UserUuid, :title, :raport, :postdate) ";
        return $this->_DB->action($this->query, $data);                            
    }

    public function getAllDocuments($data){
        $this->array = ["uuid" => "{$data}"];
        $this->query = "SELECT * 
                            FROM `documenten` 
                            WHERE `puuid` = :uuid
                            ORDER BY `documenten`.`postdate` ASC
                        ";
        return $this->_DB->getAll($this->query, $this->array); 
    }

    public function updateDocument($data){}

}