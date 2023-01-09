<?php

namespace classes\view;
    defined('_BOANN') or header("Location:{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["SERVER_NAME"]}");

class loginView{


    private     $_DB           =   NULL,
                $_INPUT        =   NULL,
                $_CONFIG       =   NULL,
                $_COOKIE       =   NULL,
                $_SETTINGS     =   NULL,
                $_REDERECT     =   NULL;

    public function __construct(){
        $this->_DB             = NEW \classes\core\db;
        $this->_INPUT          = NEW \classes\core\input;
        $this->_CONFIG         = NEW \classes\core\config;
        $this->_SETTINGS       = NEW \classes\core\settings;
        $this->_REDERECT       = NEW \classes\core\rederect;

        if($this->_INPUT->exist()){

            $this->username   =   !empty($this->_INPUT->get("username")) ? escape($this->_INPUT->get("username")) : null;
            $this->password   =   !empty($this->_INPUT->get("password")) ? escape($this->_INPUT->get("password")) : null;

            //errors
            if(empty($this->username))              { $this->error = ["Gebruikersnaam is een verplicht veld"]; }
            elseif( strlen($this->username) > 255)  { $this->error = ["Gebruikersnaam is te lang"]; }
            elseif( self::_usernameExist() < 1)     { $this->error = ["Gebruikersnaam bestaat niet!"]; }

            elseif( empty($this->password))         { $this->error = ["Wachtwoord is een verplicht veld"]; }
            elseif( strlen($this->password) > 255)  { $this->error = ["Wachtwoord is te lang"]; }
            elseif( self::_passwordExist() < 1)     { $this->error = ["Wachtwoord is onjuist"]; }

            if(empty($this->error)){
                //log user in
                $this->uuid = self::_logUserIn();

                if(!empty($this->uuid)){
                    //set session
                    //$this->_COOKIE->put($this->_CONFIG->get("boann/user"), $this->uuid)
                    if($_SESSION["{$this->_CONFIG->get("boann/user")}"] = $this->uuid){
                        //rederect to dasboard
                        header("Location:".SITE."/dasboard.php");
                    };
                }else{
                    $_SESSION["error"] = "Er is een fout opgetreden probeer het later opnieuw!";
                }
            }else{
                $_SESSION["error"] = $this->error[0];
            }

        }

    }

    protected function _logUserIn(){
        $this->array    = ["username" => "{$this->username}"];
        $this->query    = "SELECT `uuid` FROM `users` WHERE `username` = :username ";
        $this->return   = $this->_DB->get($this->query, $this->array);
        return $this->return->uuid;
    }

    protected function _passwordExist(){
        $this->array    = ["username" => "{$this->username}"];
        $this->query    = "SELECT `password` FROM `users` WHERE `username` = :username ";
        $this->return   = $this->_DB->get($this->query, $this->array);
        return password_verify($this->password, $this->return->password);
    }

    protected function _usernameExist(){
        $this->array    = ["username" => "{$this->username}"];
        $this->query    = "SELECT COUNT(`username`) AS `exist` FROM `users` WHERE `username` = :username ";
        $this->return   = $this->_DB->get($this->query, $this->array);
        return $this->return->exist;
    }

    protected function _SetPassword($data = ''){
        $options = ['cost' => 12];
        return password_hash($data, PASSWORD_BCRYPT, $options);
    }
}
