<?php

namespace classes\view;
    defined('_BOANN') or header("Location:{$_SERVER["REQUEST_SCHEME"]}://{$_SERVER["SERVER_NAME"]}");

class userView{

    private     $_DB           =   NULL;

    public function __construct(){
        $this->_DB             = NEW \classes\core\db;
    }

    public function nameExist($name = ""){
        $this->array = ["name" => "{$name}"];
        $this->query = "SELECT COUNT(`name`) AS Exist FROM `users` WHERE `name` = :name ";
        return $this->_DB->get($this->query, $this->array)->Exist;
    }

    public function callsignExist($callsign = ""){
        $this->array = ["callsign" => "{$callsign}"];
        $this->query = "SELECT COUNT(`callsign`) AS Exist FROM `users` WHERE `callsign` = :callsign ";
        return $this->_DB->get($this->query, $this->array)->Exist;
    }

    public function usernameExist($username = ""){
        $this->array = ["username" => "{$username}"];
        $this->query = "SELECT COUNT(`username`) AS Exist FROM `users` WHERE `username` = :username ";
        return $this->_DB->get($this->query, $this->array)->Exist;
    }

    public function deleteUser($uuid = ""){
        $this->query = "DELETE FROM `users` WHERE `uuid` = '{$uuid}' ";
        return $this->_DB->action($this->query);
    }

    public function UpdateUser($data, $uuid){
        $this->query = "UPDATE `users`
                            SET
                                `username`   = '{$data['username']}',
                                `name`       = '{$data['name']}',
                                `callsign`   = '{$data['callsign']}',
                                `rank`       = '{$data['rank']}',
                                `premission` = '{$data['premission']}'

                            WHERE `uuid` = '{$uuid}'
                        ";
        return $this->_DB->action($this->query);
    }

    public function getThisUser($uuid){
        $this->array = ["uuid" => "{$uuid}"];
        $this->query = "SELECT * FROM `users` WHERE `uuid` = :uuid ";
        return $this->_DB->get($this->query, $this->array);
    }

    public function register($data){
        $this->query =  "INSERT INTO `users` (`uuid`, `username`, `password`, `name`, `callsign`, `role`, `rank`)
                            VALUES(:uuid, :username, :password, :name, :callsign, :role, :rank)
                        ";
        return $this->_DB->action($this->query, $data);
    }

    public function allUsers(){
        $this->query =  "SELECT * FROM `users`";
        return $this->_DB->getAll($this->query);
    }

    public function me(){
        $this->array =  ["userSession" => "{$_SESSION["useruuid"]}"];
        $this->query =  "SELECT `username`, `name`, `role`, `rank`, `last_login`
                            FROM `users`
                            WHERE `uuid` = :userSession ";
        return $this->_DB->get($this->query, $this->array);
    }

    public function setPassword($data = ""){
        $options = ['cost' => 12];
        return password_hash($data, PASSWORD_BCRYPT, $options);
    }

}
