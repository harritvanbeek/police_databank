<?php
namespace classes\core;
defined('_BOANN') or header("Location:{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["SERVER_NAME"]}");

class cookies {
    
    public static function exist($name = ''){
        return (isset($_COOKIE[$name])) ? true : false;
    }

    public static function put($name = '', $values = ''){
        setcookie($name, $values, time()+7200);
    }

    public static function get($name = ''){

    }

    public static function delete($name = ''){
        if(self::exist($name)) {
            setcookie($name, time()-7200);
		}
    }

}
