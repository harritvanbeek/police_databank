<?php 
    define('_BOANN', 1);
    require_once dirname(dirname(dirname(__file__))).'/libraries/import.php';
    
    $_POST      =   json_decode(file_get_contents("php://input"), true)["0"];
    $action     =   !empty($_GET["action"]) ? $_GET["action"] : null;

    $security   =   NEW \classes\core\security;
    $settings   =   NEW \classes\core\settings;
    $input      =   NEW \classes\core\input;
    $users      =   NEW \classes\view\userView;

    switch($action){
        case "insertUser" :
            if($input->exist()){
                $username   =   !empty($input->get("data")["username"]) ? $input->get("data")["username"]   : null;
                $password   =   !empty($input->get("data")["password"]) ? $input->get("data")["password"]   : null;
                $name       =   !empty($input->get("data")["name"])     ? $input->get("data")["name"]       : null;
                $role       =   !empty($input->get("data")["role"])     ? $input->get("data")["role"]       : null;
                $rank       =   !empty($input->get("data")["rank"])     ? $input->get("data")["rank"]       : null;
                
                $error = "";

                if(empty($error)){
                    $dataArry = [
                        "uuid"      =>  "{$settings->MakeUuid()}",
                        "username"  =>  "{$username}",
                        "password"  =>  $users->setPassword("{$password}"),
                        "name"      =>  "{$name}",
                        "role"      =>  "{$role}",
                        "rank"      =>  "{$rank}",
                    ];

                    if($users->register($dataArry) > 0){
                        $dataArray = [
                            "data"          =>  "success",
                            "dataURL"       =>  "./admin.php",
                        ];
                    }else{
                        $dataArray = [
                            "data"          =>  "error",
                            "dataContent"   =>  "Er is een fout opgetreden probeer het leter opnieuw!",
                        ];
                    }
                }else{
                    $dataArray = [
                        "data"          =>  "error",
                        "dataContent"   =>  "{$errors["0"]}",
                    ];
                }
                    echo json_encode($dataArray);
            }
        break;

        case "getUsers" :
            echo json_encode($users->allUsers());
        break;
    }