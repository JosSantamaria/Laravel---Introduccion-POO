<?php
include 'includes/header.php';

class Empleado {
    
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    //Creacion de constructor con metodo magico (se escriben con dos lineas bajas al inicio __)
    /**
     * Php puede manejar tipado, pero no es tanbfuerte como en java, C# o TypeScript, en caso de mandarle un valor 
     * que no esta esperando, tratara de hacer la conversión, por ejemplo de string -> numero ("20" -> 20),
     * php tratara de convertirlo al tipo esperado, pero no funciona en el caso de int -> string(que no sea numero)
     * por ejemplo: "codigo" -> numero(*Esto dara un error inesperado*).
     */
    public function __construct( string $_nombre, string $_apellido, string $_departamento, string $_email, int $_codigo){

         $this->nombre = $_nombre;
         $this->apellido = $_apellido;
         $this->departamento = $_departamento;
         $this->email = $_email;
         $this->codigo = $_codigo;


    }

}

$jos = new Empleado('Jos [On Constructor]','Cervantes','TI','jsantamaria@dominio.com',97175);

$maf = new Empleado('Maf [On Constructor]','Manzanero','Turin','m.manz@dominio.com',97175);

echo "<pre>";
var_dump($jos);
echo "</pre>";

echo "<pre>";
var_dump($maf);
echo "</pre>";