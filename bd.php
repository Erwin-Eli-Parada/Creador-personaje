<?php

$db = new mysqli("localhost","root","","custom20");

if($db -> connect_errno){
    echo "Hubo un error en la base de datos".$db-> connect_error;
}