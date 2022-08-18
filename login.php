<?php
error_reporting(0);
require("bd.php");
require_once("models/usuario.class.php");

$usuarios=new Usuario($db);

echo $ruser.$rpass;

if(isset($_POST['ingreso']) && isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['password']) && !empty($_POST['password'])){
    $usuario=($_POST['usuario']);
    $pass=($_POST['password']);
    echo $usuario.$pass;
    $resultado = $usuarios->searchUsers($usuario,$pass);

    if(mysqli_num_rows($resultado)>0){
        $_SESSION['login']=TRUE;
        $_SESSION['Usuario']=$usuario;
        header("location:Inicio");
    }else{
        
        $resultado->close();
    }
}

require("views/login.html");