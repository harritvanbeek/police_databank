<?php
    define('_BOANN', 1);
    require_once dirname(dirname(dirname(__file__))).'/libraries/import.php';

    $_POST      =   json_decode(file_get_contents("php://input"), true)["0"];
    $action     =   !empty($_GET["action"]) ? $_GET["action"] : null;

    $input     =   NEW \classes\core\input;
    $security  =   NEW \classes\core\security;
    $user      =   NEW \classes\view\userView;

    switch($action){
        case "updateUser":
            if($input->exist()){
                $username           = !empty($input->get("data")["username"])       ? escape($input->get("data")["username"])        : null;
                $name               = !empty($input->get("data")["name"])           ? escape($input->get("data")["name"])            : null;
                $rank               = !empty($input->get("data")["rank"])           ? escape($input->get("data")["rank"])            : null;
                $role               = !empty($input->get("data")["role"])           ? escape($input->get("data")["role"])            : null;
                $callsign           = !empty($input->get("data")["callsign"])       ? escape($input->get("data")["callsign"])        : null;

                $canEdit            = !empty($input->get("data")["setEdit"])        ? "true" : "false";
                $canDelete          = !empty($input->get("data")["setDelete"])      ? "true" : "false";

                if(empty($username) === true){ $errors = ["Gebruikersnaam is een verplichte veld!"]; }
                if(empty($name)     === true){ $errors = ["Naam is een verplichte veld!"]; }
                if(empty($callsign) === true){ $errors = ["Roepnummer is een verplichte veld!"]; }

                if(empty($errors)){
                    $SetPremission = [
                        "edit"      => "{$canEdit}",
                        "delete"    => "{$canDelete}",
                    ];


                    $premission     =   json_encode($SetPremission);

                    $postArray = [
                        "username"   => "{$username}",
                        "name"       => "{$name}",
                        "rank"       => "{$rank}",
                        "callsign"   => "{$callsign}",
                        "premission" => "{$premission}",
                    ];

                    if($user->UpdateUser($postArray, $input->get("uuid")) > 0){
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
            };
        break;

        case "getThisUser":
            $uuid = escape($_GET["uuid"]);
            $data = $user->getThisUser($uuid);

            $dataArray  = [
                "username"  => "{$data->username}",
                "name"      => "{$data->name}",
                "callsign"  => "{$data->callsign}",
                "rank"      => "{$data->rank}",
                "role"      => "{$data->role}",
                "canEdit"       => json_decode($data->premission)->edit,
                "canDelete"     => json_decode($data->premission)->delete,
            ];

            echo json_encode($dataArray);
        break;

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
