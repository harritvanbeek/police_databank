<?php
namespace classes\view;
    defined('_BOANN') or header("Location:{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["SERVER_NAME"]}");

class renderView{

    private     $_DB        =   NULL,
                $FIVEM_DB   =   NULL,
                $_CONFIG    =   NULL,
                $_SESSION   =   NULL,

                $_CONTROLLER    =   "login",
                $_INDEX         =   "index",
                $_PAGE          =   "",

                $_PARAMS        =   [],
                $_MODEL         =   NULL,
                $_URL           =   NULL;

    public function __construct(){
        $this->_DB          = NEW \classes\core\db;
        $this->FIVEM_DB     = NEW \classes\core\fivem_db;
        $this->_CONFIG      = NEW \classes\core\config;
        $this->_SESSION     = NEW \classes\core\session;


        debug(self::_parseURL(), 1);

        if(class_exists('classes\view\\'.$this->_CONTROLLER."View") > 0){
            $this->className    =   'classes\view\\'.$this->_CONTROLLER."View";
            $this->_CONTROLLER  =   NEW     $this->className;                           
        };

        if( isset($this->_URL[1]) ){
            $this->_MODEL   =   $this->_URL[1];
            unset($this->_URL[1]);
        };


        //logout
        if(isset($_GET["logout"]) || !empty($_GET["logout"]) === true || $_GET["logout"] === "logout"){
            if($this->_SESSION->exist($this->_CONFIG->get("boann/user"))){
                $this->_SESSION->delete($this->_CONFIG->get("boann/user"));
            }
            header("Location:".SITE);
            die;
        }
    }


    public function view(){
        //chek user is logedin
        if($this->_SESSION->exist($this->_CONFIG->get("boann/user"))){
            require_once "templates/index.php";
        }else{
            require_once "view/com_login/login.php";
        }
    }

    protected function urlExist(){
        return file_exists("view/com_{$this->_URL[0]}/index.php");
    }


    protected function urlFolderExist(){
        if(is_dir("view/com_{$this->_PAGE}")){
            return true;
        }else{
            return false;
        }
    }

    protected function _parseURL(){
        if(!empty($_GET["request"])){
            print_r( explode("/", filter_var(rtrim($_GET["request"], "/")), FILTER_SANITIZE_URL));
            return explode("/",  filter_var(rtrim($_GET["request"], '/'), FILTER_SANITIZE_URL));
        }
    }
}
