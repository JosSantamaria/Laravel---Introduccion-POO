<?php
include 'includes/header.php';

//Modificadores de acceso
class Empleado {
    //public, private, protected
    
    //Public: Acceso desde cualquier lugar del programa (clase, objeto, herencia:en caso de heredar las propiedades se podra acceder a ella)
    //Protected: Solo tendremos acceso desde el cuerpo de la clase misma (podemos tener un metodo que nos retorne la propiedad, es valido mientras sea desde dentro de la misma clase).
    //Se tendran que crear metodos para acceder o modificar las propiedades que esten determinadas como 'protected'.
   public $nombre; 
   public $apellido;
   public $departamento;
   protected $email;
   public $codigo;

   //Constructor
   public function __construct($_nombre, $_apellido, $_departamento, $_email, $_codigo){

        $this->nombre = $_nombre;
        $this->apellido = $_apellido;
        $this->departamento = $_departamento;
        $this->email = $_email;
        $this->codigo = $_codigo;

   }

   //Metodo 1 (nombre)
   public function nombreEmpleado(){
    //podemos acceder a las propiedades de la clase desde este metodo usando $this nuevamente.
       echo $this->nombre . " " . $this->apellido;
   }
    //Metodo 2 departamento
    public function departamentoEmpleado(){
        //hacemos el retorno del valor de una de las propiedades de la clase (departamento)
        return $this->departamento;
    }

    public function retornaEmailEmpleado(){
        //Accedemos a la propiedad protected email desde la misma clase y la retornamos (valido)
        return $this->email;
    }

    public function nuevoEmailEmpleado($nuevoEmail){
        //Accedemos a la propiedad protected email desde la misma clasem cambiamos el valor de la propiedad y retornamos
        return $this->email = $nuevoEmail; //retornamos para poder ver el valor despues de la ejecucion del codigo.
    }

}

$jos = new Empleado('Jos [On Constructor]','Cervantes','TI','jsantamaria@dominio.com',97175);
//Mostrar datos:
echo "<pre>";
var_dump($jos);
echo "</pre>";

echo "<b><h6>Retorno de propiedad protegida a traves de una funcion publica dentro de la propia clase</h6></b>";
echo "Retorno: " . $jos->retornaEmailEmpleado();

echo "<b><h6>Cambiamos email desde la funcion de la clase nuevoEmailEmpleado( ) </h6></b>";
//$jos->email = "nuevo_email@dominio.com"; //Esto dara error: Uncaught Error: Cannot access protected property Empleado::$email.
/**
 * No podemos modificar una propiedad protegida desde la instancia,
 * debemos crear un una funcion para poder pasar un parametro y pueda modificar la propiedad de la clase
 */
echo "Retorno nuevoEmail:: " .$nuevo = $jos->nuevoEmailEmpleado('nuevo_email_jsantamaria@domino.com');
// var_dump($nuevo);





