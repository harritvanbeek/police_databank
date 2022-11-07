<?php 

namespace classes\view;
    defined('_BOANN') or header("Location:{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["SERVER_NAME"]}");

class userView{

    private     $_DB           =   NULL;

    public function __construct(){
        $this->_DB             = NEW \classes\core\db;
    }


    public function me(){
        $this->array =  ["userSession" => "{$_SESSION["useruuid"]}"];
        $this->query =  "SELECT `username`, `name`, `role`, `rank`, `last_login` 
                            FROM `users` 
                            WHERE `uuid` = :userSession ";
        return $this->_DB->get($this->query, $this->array);
    }

}