<?php
   
   require_once dirname(__file__)."/libraries/config.php";

   if(!empty($_SESSION["useruuid"])){
      header("location: ".SITE."/dasboard.php");
   }else{
      header("location: ".SITE."/login.php");
   }
