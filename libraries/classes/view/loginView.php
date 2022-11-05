<?php 

namespace classes\view;
    defined('_BOANN') or header("Location:{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["SERVER_NAME"]}");

class loginView{

    private     $_INPUT        =   NULL;

    public function __construct(){
        $this->_INPUT          = NEW \classes\core\input;

        if($this->_INPUT->exist()){
            $username   =   !empty($this->_INPUT->get("username")) ? escape($this->_INPUT->get("username")) : null;
            $password   =   !empty($this->_INPUT->get("password")) ? escape($this->_INPUT->get("password")) : null;
            
            //errors

            $array =    [

            ];

            debug();

        }
      
    }
}