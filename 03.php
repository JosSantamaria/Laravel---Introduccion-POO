<?php
include 'includes/header.php';

class Empleado {
    //Definicion de atributos
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

}

$empleado = new Empleado;
$empleado->nombre = "Joset";
$empleado->apellido = "Cervantes";

echo "<pre>";
var_dump($empleado);
echo "</pre>";


echo "<br><hr>";


$empleado2 = new Empleado;
$empleado2->nombre = "Mafer";
$empleado2->apellido = "Manzanero";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";


?>