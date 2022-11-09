<?php
namespace classes\view;
    defined('_BOANN') or header("Location:{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["SERVER_NAME"]}");

class renderView{

    private     $_DB           =   NULL;

    public function __construct(){
        $this->_DB             = NEW \classes\core\db;
    }

    public function isAdmin(){
        if(self::_isAdmin()->role !== "admin"){
            header("location: ".SITE."/login.php");
        };
    }

    public function header(){
        //chek user session is empty        
        if(self::userSessionExists() < 1){
            header("location: ".SITE."/login.php");
        }else{
            require_once "./templates/header.php";
        }
    }
    
    public function footer(){
        require_once "./templates/footer.php";
    }

    protected function userSessionExists(){
        $this->array =  ["usersession" => "{$_SESSION["useruuid"]}"];
        $this->query = "SELECT COUNT(`uuid`) as `exist` FROM `users` WHERE `uuid` = :usersession ";
        return $this->_DB->get($this->query, $this->array)->exist;
    }

    protected function _isAdmin(){
        $this->array =  ["usersession" => "{$_SESSION["useruuid"]}"];
        $this->query = "SELECT * FROM `users` WHERE `uuid` = :usersession ";
        return $this->_DB->get($this->query, $this->array);
    } 
    
}
