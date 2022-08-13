<?php

//importamos la clase de inicio de la app
require_once('app.class.php');
//importamos la clase de template
require_once('template.class.php');

//creamos un objeto de tipo template para asi poder crear una plantilla por cada vista
$child = new Template("views/misiones.html");

//incluyo la vista de inicio para crear la ruta de carpetas falsas
$view = new Template("views/template.html", [
    "nombre" => "Erwin Eli",
    "child" => $child
]);

echo $view;