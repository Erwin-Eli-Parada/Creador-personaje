<?php
error_reporting(0);
require("bd.php");
require_once("models/usuario.class.php");

$usuarios=new Usuario($db);

echo $ruser.$rpass;

if(isset($_POST['ingreso']) && isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['password']) && !empty($_POST['password'])){
    $usuario=$db->real_escape_string($_POST['usuario']);
    $pass=$db->real_escape_string(md5($_POST['password']));
    echo $usuario.$pass;
    $resultado = $usuarios->searchUsers($usuario,$pass);

    if(mysqli_num_rows($resultado)>0){
        session_start();
        $_SESSION['login']=TRUE;
        $_SESSION['Usuario']=$usuario;
        header("location:Inicio");
    }else{
        
        $resultado->close();
    }
}

require("views/login.html");