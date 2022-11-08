<?php 
    define('_BOANN', 1);
    require_once dirname(dirname(dirname(__file__))).'/libraries/import.php';
    
    $_POST      =   json_decode(file_get_contents("php://input"), true)["0"];
    $action     =   !empty($_GET["action"]) ? $_GET["action"] : null;

    $security   =   NEW \classes\core\security;
    $settings   =   NEW \classes\core\settings;
    $input      =   NEW \classes\core\input;
    $ducument   =   NEW \classes\view\documentenView;

    switch ($action) {
        case 'setDocument':
            if($input->exist()){
                $puuid          =  !empty($input->get("puuid"))                    ? $input->get("puuid")                          : null;
                $title          =  !empty($input->get("data")["discription"])      ? escape($input->get("data")["discription"])    : null;
                $raport         =  !empty($input->get("data")["tinymceModel"])     ? $input->get("data")["tinymceModel"]           : null;
                
                $errors = "";

                if(empty($errors)){
                    $postDate   = date("Y-m-d h:i:s");
                    $dataArray = [
                        "ruuid"     => "{$settings->MakeUuid()}",
                        "puuid"     => "{$puuid}",
                        "UserUuid"  => "{$_SESSION["useruuid"]}",
                        "title"     => "{$title}",
                        "raport"    => "{$raport}",
                        "postdate"  => "{$postDate}",
                    ];
                    
                    debug($ducument->create($dataArray), 1);
                }
            }
        break;
    }