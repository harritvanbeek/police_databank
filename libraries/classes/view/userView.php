<?php 

namespace classes\view;
    defined('_BOANN') or header("Location:{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["SERVER_NAME"]}");

class userView{

    private     $_DB           =   NULL;

    public function __construct(){
        $this->_DB             = NEW \classes\core\db;
    }


    public function register($data){
        $this->query =  "INSERT INTO `users` (`uuid`, `username`, `password`, `name`, `role`, `rank`) 
                            VALUES(:uuid, :username, :password, :name, :role, :rank)
                        ";
        return $this->_DB->action($this->query, $data);
    }

    public function allUsers(){
        $this->query =  "SELECT * FROM `users`";
        return $this->_DB->getAll($this->query);
    }

    public function me(){
        $this->array =  ["userSession" => "{$_SESSION["useruuid"]}"];
        $this->query =  "SELECT `username`, `name`, `role`, `rank`, `last_login` 
                            FROM `users` 
                            WHERE `uuid` = :userSession ";
        return $this->_DB->get($this->query, $this->array);
    }

    public function setPassword($data = ""){
        $options = ['cost' => 12];
        return password_hash($data, PASSWORD_BCRYPT, $options);
    }

}