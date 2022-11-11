<?php 

namespace classes\view;
    defined('_BOANN') or header("Location:{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["SERVER_NAME"]}");

class straffenView{

    private     $_DB           =   NULL;

    public function __construct(){
        $this->_DB             = NEW \classes\core\db;
    }

    public function getAllStraffen(){
        $this->query = "SELECT * FROM `laws`";
        return $this->_DB->getAll($this->query);
    }

}