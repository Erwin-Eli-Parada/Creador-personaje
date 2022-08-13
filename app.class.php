<?php

class App{
    
    private $uri;
    
    public function __construct(){
        // Pido la dirección de mi pagina
        $this -> uri = $_SERVER['REQUEST_URI'];
        // Separo dicha dirección por '/' para obtener las partes de la url
        $uriParts = explode('/',$this -> uri);
        // Esto quita el primer elemento ya que el primer elemento siempre es una elemento vacio
        array_shift($uriParts);
    }

    public function __toString()
    {
        return $this -> uri;
    }
}

