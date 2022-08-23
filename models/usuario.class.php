<?php

class Usuario{
    private $res;
    private $db;

    public function __construct($database){
        $this->db=$database;
    }

    public function allUsers(){
        return $this->res= $this->db->query("SELECT * FROM usuario");
    }

    public function searchUsers($nombre,$password){
        return $this->res= $this->db->query("SELECT * FROM usuario WHERE ( nombre = '$nombre' and contrasenia = '$password')");
    }
}