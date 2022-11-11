<?php 
    define('_BOANN', 1);
    require_once dirname(dirname(dirname(__file__))).'/libraries/import.php';
    
    $_POST      =   json_decode(file_get_contents("php://input"), true)["0"];
    $action     =   !empty($_GET["action"]) ? $_GET["action"] : null;

    $security   =   NEW \classes\core\security;
    $settings   =   NEW \classes\core\settings;
    $input      =   NEW \classes\core\input;
    $straffen   =   NEW \classes\view\straffenView;

    switch($action){
        case "allStraffen" :
        foreach($straffen->getAllStraffen() as $item){
            $dataArray[] = [
                "id"            =>  "{$item->id}",
                "name"          =>  escape("{$item->name}"),
                "description"   =>  escape("{$item->description}"),
                "fine"          =>  "{$item->fine}",
                "months"        =>  "{$item->months}",
            ];            
        }
            echo json_encode($dataArray);
        break;
    }