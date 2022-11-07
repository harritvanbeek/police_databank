<?php
namespace classes\core;
defined('_BOANN') or header("Location:{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["SERVER_NAME"]}");

class security{

    private     $_DB           =   NULL;

    public function __construct(){
        $this->_DB             = NEW \classes\core\db;
        if(self::userSessionExists() < 1){
            header("location: ".SITE."/login.php");
        }
    }

    protected function userSessionExists(){
        $this->array =  ["usersession" => "{$_SESSION["useruuid"]}"];
        $this->query = "SELECT COUNT(`uuid`) as `exist` FROM `users` WHERE `uuid` = :usersession ";
        return $this->_DB->get($this->query, $this->array)->exist;
    }
}
