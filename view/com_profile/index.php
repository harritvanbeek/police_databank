<?php 
    define('_BOANN', 1);
    require_once dirname(dirname(dirname(__file__))).'/libraries/import.php';
    
    $_POST      =   json_decode(file_get_contents("php://input"), true)["0"];
    $action     =   !empty($_GET["action"]) ? $_GET["action"] : null;

    $security   =   NEW \classes\core\security;
    $settings   =   NEW \classes\core\settings;
    $input      =   NEW \classes\core\input;
    $profile    =   NEW \classes\view\profileView;
    $ducument   =   NEW \classes\view\documentenView;

    switch($action){
        case "listDocuments" :
            if($input->exist()){
                $uuid       = !empty($input->get("data")) ? escape($input->get("data")) : null;
                $dossier    = $ducument->getAllDocuments($uuid);
                if(!empty($dossier)){
                    foreach($dossier as $item){
                        $dataArray[]    =   [
                            "ruuid"     =>  "{$item->ruuid}",
                            "dosid"     =>  explode("-", "{$item->ruuid}")[0],
                            "title"     =>  "{$item->title}",
                            "postdate"  =>  "{$item->postdate}",
                        ];
                    }
                    
                    echo json_encode($dataArray);
                }  
            }
        break;

        case "fullProfile" :
            if($input->exist()){
                $uuid = !empty($input->get("data")) ? escape($input->get("data")) : null;
                echo json_encode($profile->fullProfile($uuid));
            }
        break;
        
        case "insertProfiles" :
            if($input->exist()){
                $citizenid      =   !empty( $input->get("data")["citizenid"])       ? escape($input->get("data")["citizenid"])      : null;
                $firstname      =   !empty( $input->get("data")["firstname"])       ? escape($input->get("data")["firstname"])      : null;
                $lastname       =   !empty( $input->get("data")["lastname"])        ? escape($input->get("data")["lastname"])       : null;
                $datesofbirth   =   !empty( $input->get("data")["datesofbirth"])    ? escape($input->get("data")["datesofbirth"])   : null;
                $sex            =   !empty( $input->get("data")["sex"])             ? escape($input->get("data")["sex"])            : null;
                $nationality    =   !empty( $input->get("data")["nationality"])     ? escape($input->get("data")["nationality"])    : null;
                
                //errors
                if(empty($citizenid))       {$errors = ["BSN is een verplichte veld"];}
                elseif(empty($firstname))   {$errors = ["Voornaam is een verplichte veld"];}
                elseif(empty($lastname))    {$errors = ["Achternaam is een verplichte veld"];}
                
                elseif(empty($sex))         {$errors = ["Geslacht is een verplichte veld"];}
                elseif(empty($nationality)) {$errors = ["Nationality is een verplichte veld"];}

                if(empty($errors)){
                    //20/02/1980
                    $postArray  =   [
                        "puuid"         =>  "{$settings->MakeUuid()}",
                        "citizenid"     =>  "{$citizenid}",
                        "firstname"     =>  "{$firstname}",
                        "lastname"      =>  "{$lastname}",
                        "datesofbirth"  =>  "{$datesofbirth}",
                        "sex"           =>  "{$sex}",
                        "nationality"   =>  "{$nationality}",
                    ];
                    //$profile->create($postArray)
                    
                    if($profile->create($postArray) > 0){                        
                        $dataArray = [
                            "data"          =>  "success",
                            "dataURL"       =>  "./profiles.php?citizenid={$citizenid}",
                        ];
                    }else{
                        $dataArray = [
                            "data"          =>  "error",
                            "dataContent"   =>  "Er is een fout opgetreden probeer het leter opnieuw!",
                        ];
                    };
                }else{
                    $dataArray = [
                        "data"          =>  "error",
                        "dataContent"   =>  "{$errors["0"]}",
                    ];
                }
                    echo json_encode($dataArray);
            }
        break;

        case "searchProfiles" :
            if($input->exist()){
                $search     = !empty($input->get("data")["search"]) ? escape($input->get("data")["search"]) : null;
                $profiles   = $profile->search($search);
                 if(!empty($profiles)){
                    //output data
                    //debug($profiles);
                        /*$dataArray    =   [
                            "data"  =>  "success"
                        ];*/

                        foreach($profiles as $person){
                            $dataArray[]    =   [
                                "puuid"         =>  "{$person->puuid}",
                                "citizenid"     =>  "{$person->citizenid}",
                                "firstname"     =>  "{$person->firstname}",
                                "lastname"      =>  "{$person->lastname}",
                                "datesofbirth"  =>  "{$person->datesofbirth}",
                                "sex"           =>  "{$person->sex}",
                                "nationality"   =>  "{$person->nationality}",
                                "avatar"        =>  "{$person->avatar}",
                                "fingerprint"   =>  "{$person->fingerprint}",
                                "dnacode"       =>  "{$person->dnacode}",
                                "note"          =>  "{$person->note}",
                                "lastsearch"    =>  "{$person->lastsearch}",
                            ];
                        }

                    echo json_encode($dataArray);

                 }else{
                    $dataArray = [
                        "data"  =>  "noprofiles"
                    ];
                    echo json_encode($dataArray);
                 }
            }
        break;
    }