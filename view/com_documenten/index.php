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
        case "documentenList" :
            foreach($ducument->getList() as $item){
                if(empty($item->puuid)){
                    $dataArray[] =  [
                        "ruuid"     =>  "{$item->ruuid}",
                        "code"      =>  explode("-", "{$item->ruuid}")[0],
                        "title"     =>  "{$item->title}",
                        "name"      =>  "{$item->name}",
                        "postdate"  =>  "{$item->postdate}",
                    ];
                }
            }
                echo json_encode($dataArray);
        break;

        case "thisDocument" :
            if($input->exist()){
                $ruuid          = !empty($input->get("data")) ? $input->get("data") : null;
                $thisDocument   = $ducument->thisDocument($ruuid);
                if($thisDocument){
                    $dataArray  =   [
                        "code"      =>  explode("-", "{$thisDocument->ruuid}")[0] ,
                        "title"     =>  "{$thisDocument->title}",
                        "raport"    =>  "{$thisDocument->raport}",
                        "postdate"  =>  "{$thisDocument->postdate}",
                        "firstname" =>  "{$thisDocument->firstname}",
                        "lastname"  =>  "{$thisDocument->lastname}",
                        "name"      =>  "{$thisDocument->name}",
                        "rank"      =>  "{$thisDocument->rank}",
                    ];
                    echo json_encode($dataArray);
                }  
            }
        break;

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
                        "puuid"     => $puuid,
                        "UserUuid"  => "{$_SESSION["useruuid"]}",
                        "title"     => "{$title}",
                        "raport"    => "{$raport}",
                        "postdate"  => "{$postDate}",
                    ];
                    
                    if($ducument->create($dataArray)> 0){
                        if(empty($puuid)){
                            $dataArray = [
                                "data"          =>  "success",
                                "dataContent"   =>  "",
                                "dataURL"       =>  "documentenList.php",
                            ];
                        }else{
                            $dataArray = [
                                "data"          =>  "success",
                                "dataContent"   =>  "",
                                "dataURL"       =>  "full-profile.php?puuid={$puuid}",
                            ];
                        };

                    }else{

                    };
                        echo json_encode($dataArray);
                }
            }
        break;
    }