<?php
    require_once "./libraries/config.php";

        
    if(!empty($_SESSION["useruuid"])){
        unset($_SESSION["useruuid"]);
        header("location: ".SITE."/index.php");
    };
