<?php
include 'includes/header.php';

class Empleado {
    //Definicion de atributos
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    //Creacion de constructor con metodo magico (se escriben con dos lineas bajas al inicio __)
    /**
     * Con este constructor nos ahorramos lineas de codigo y pasamos directamente los parametros a la instancia, sin importar el nombre de la variable final que 
     * hace el llamado de la clase y creacion del nuevo objeto.
     */
    public function __construct($_nombre, $_apellido, $_departamento, $_email, $_codigo){
        //echo "Desde el contructor";//La funcion llama a la clase desde si misma.
        /**
         * Para poder asignar un parametro a una propiedad, debemos de usar ' @var $this->nombre_propiedad = @param _parametro ' , para que esta sea reconocida por PHP
         * De esta manera, no funcionaria ($nombre = $nombre), ya que php no conoce como llamaremos a nuestra variable que contendra la instancia despues.
         */

         $this->nombre = $_nombre;
         $this->apellido = $_apellido;
         $this->departamento = $_departamento;
         $this->email = $_email;
         $this->codigo = $_codigo;


    }

}

/**
 * Ya nos es importante el nombre de la variable que contiene la instancia, los parametros se asignan automaticamente y en el orden en el que se encuentra
 * En el constructor (nombre, apellido, departamento, ...)
 */
$jos = new Empleado('Jos [On Constructor]','Cervantes','TI','jsantamaria@dominio.com',97175);

$maf = new Empleado('Maf [On Constructor]','Manzanero','Turin','m.manz@dominio.com',97175);



echo "<pre>";
var_dump($jos);
echo "</pre>";

echo "<pre>";
var_dump($maf);
echo "</pre>";