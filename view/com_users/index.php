<?php
    define('_BOANN', 1);
    require_once dirname(dirname(dirname(__file__))).'/libraries/import.php';

    $_POST      =   json_decode(file_get_contents("php://input"), true)["0"];
    $action     =   !empty($_GET["action"]) ? $_GET["action"] : null;

    $security   =   NEW \classes\core\security;
    $settings   =   NEW \classes\core\settings;
    $session    =   NEW \classes\core\session;
    $_CONFIG    =   NEW \classes\core\config;
    $input      =   NEW \classes\core\input;
    $users      =   NEW \classes\view\userView;

    switch($action){
        case "deleteUser" :
            if($input->exist()){
                if($session->get($_CONFIG->get("boann/user")) !== $input->get("data")){
                    if($users->deleteUser($input->get("data")) > 0){
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
                        "dataContent"   =>  "Je kan je eigen account niet verwijderen!",
                    ];
                }
                    echo json_encode($dataArray);
            }
        break;

        case "insertUser" :
            if($input->exist()){
                $username   =   !empty($input->get("data")["username"]) ? $input->get("data")["username"]   : null;
                $password   =   !empty($input->get("data")["password"]) ? $input->get("data")["password"]   : null;
                $callsign   =   !empty($input->get("data")["callsign"]) ? $input->get("data")["callsign"]   : null;
                $name       =   !empty($input->get("data")["name"])     ? $input->get("data")["name"]       : null;
                $role       =   !empty($input->get("data")["role"])     ? $input->get("data")["role"]       : null;
                $rank       =   !empty($input->get("data")["rank"])     ? $input->get("data")["rank"]       : null;

                if(empty($username)     === true)           { $errors = ["Gebruikersnaam is een verplichte veld!"]; }
                elseif($users->usernameExist($username))    { $errors = ["Gebruikersnaam is al in gebruik!"]; }

                elseif(empty($name)     === true)           { $errors = ["Fivem Naam is een verplichte veld!"]; }
                elseif($users->nameExist($name))            { $errors = ["Naam is al in gebruik!"]; }
                elseif(empty($password) === true)           { $errors = ["Wachtwoord is een verplichte veld!"]; }

                elseif(empty($callsign) === true)           { $errors = ["Callsign is een verplichte veld!"]; }
                elseif($users->callsignExist($callsign))    { $errors = ["Callsign is al in gebruik!"]; }

                elseif(empty($rank)     === true)   { $errors = ["Rank is een verplichte veld!"]; }
                elseif(empty($role)     === true)   { $errors = ["Role is een verplichte veld!"]; }

                if(empty($errors)){
                    $dataArry = [
                        "uuid"      =>  "{$settings->MakeUuid()}",
                        "username"  =>  "{$username}",
                        "password"  =>  $users->setPassword("{$password}"),
                        "name"      =>  "{$name}",
                        "callsign"  =>  "{$callsign}",
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
