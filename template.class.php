<?php

class Template{
    private $content;
    
    public function __construct($path, $data=[])    {
        //Extraemos los datos del arreglo de datos
        extract($data);
        //necesitamos un buffer para guardar la vista que vamos a imprimir
        ob_start();  //iniciamos el buffer
        include($path); //incluimos la vista
        $this->content = ob_get_clean();  //guardamos la vista en una variable y limpiamos el buffer
    }

    public function __toString(){
        return $this->content;
    }
}