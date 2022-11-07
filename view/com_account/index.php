<?php 
    define('_BOANN', 1);
    require_once dirname(dirname(dirname(__file__))).'/libraries/import.php';
    
    $_POST      =   json_decode(file_get_contents("php://input"), true)["0"];
    $action     =   !empty($_GET["action"]) ? $_GET["action"] : null;

    $security  =   NEW \classes\core\security;
    $user      =   NEW \classes\view\userView;
    
    switch($action){
        case "me":
            $thisUser = $user->me();
            if(!empty($thisUser)){
                $dataArray =    [
                    "premissions" => "{$thisUser->role}",
                    "username"    => "{$thisUser->username}",
                    "name"        => "{$thisUser->name}",
                ];
                echo json_encode($dataArray);
            }
        break;
    }