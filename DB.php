<?php

class DB
{
    //Declaramos propiedad que usaremos desde otra clase
    protected $email;//requerimos una funcion para acceder a esta propiedade.

    //Asignamos valores a propiedades desde el contructor
    public function __construct($_email) {
        $this->email = $_email;
    }

    public function guardar()
    {
        echo "Almacenando..(desde otra clase)".$this->email;
    }
    
}