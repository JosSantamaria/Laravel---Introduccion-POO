<?php
include 'includes/header.php';

class Empleado {

    /**
     * Segunda forma de definicion del contructor, los atributos se pasan al constructor como parametro 
     * directamente en los parentesis y asi reducimos lineas de codigo.
     * Esta forma de declaracion esta disponible a partir de la version @version 8.0.0 de PHP.
     * Si necesitamos establecer un parametro predeterminado, se debe hacer desde el argumento al metodo constructor.
     */
    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo
        ){ }

}

/**
 * Ya nos es importante el nombre de la variable que contiene la instancia, los parametros se asignan automaticamente y en el orden en el que se encuentra
 * En el constructor (nombre, apellido, departamento, ...)
 */
$jos = new Empleado('Jos [On Constructor]','Cervantes','TI','jsantamaria@dominio.com',97175);

$maf = new Empleado('Maf [On Constructor]','Manzanero','Turin','m.manz@dominio.com',97175);



echo "<pre>";
echo "<h5>Uso de Constructor Property Promotion</h5>";
var_dump($jos);
echo "</pre>";

echo "<pre>";
var_dump($maf);
echo "</pre>";