<?php
include 'includes/header.php';

// Getters & Setters;
class Empleado {   //public, private, protected
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

    public function nombreEmpleado(){
    //podemos acceder a las propiedades de la clase desde este metodo usando $this nuevamente.
       echo $this->nombre . " " . $this->apellido;
    }
    public function departamentoEmpleado(){
        //hacemos el retorno del valor de una de las propiedades de la clase (departamento)
        return $this->departamento;
    }
    //Estas funciones retornan valores (no es exactamente necesario el retorno, con que modifiques u obtengan el valor es suficiente).
    public function retornaEmailEmpleado(){
        //Accedemos a la propiedad protected email desde la misma clase y la retornamos (valido)
        return $this->email;
    }
    public function nuevoEmailEmpleado($nuevoEmail){
        //Accedemos a la propiedad protected email desde la misma clasem cambiamos el valor de la propiedad y retornamos
        return $this->email = $nuevoEmail; //retornamos para poder ver el valor despues de la ejecucion del codigo.
    }

    /** Estos si necesitan un return explicitamente para devolver el valor obtenido o modificado
     * Get - Para Obtener un Valor.
     * Set - Para Establecer, modificar un valor.
     */

    public function getEmail(){
        //Accedemos a la propiedad protected email desde la misma clase y la retornamos (valido)
        return $this->email;
    }
    public function setNuevoEmail($nuevoEmail){
        //Accedemos a la propiedad protected email desde la misma clasem cambiamos el valor de la propiedad y retornamos
        return $this->email = $nuevoEmail; 
    }

    //Mismos principios de GET - SET aplicado a ala propiedad codigo
    public function getCodigo(){
        
        return $this->codigo;
    }
    public function setCodigo($nuevoCodigo){
        
        return $this->codigo = $nuevoCodigo; 
    }

}

$jos = new Empleado('Jos [On Constructor]','Cervantes','TI','jsantamaria@dominio.com',97175);
//Mostrar datos:
echo "<pre>";
var_dump($jos);
echo "</pre>";

echo "<b><h6>Retorno de propiedad protegida a traves de una funcion Getter (para POO)</h6></b><br>";
echo "<b>Retorno: <i>getEmail( )</i></b> : " . $jos->getEmail();

echo "<br><b>Retorno: <i>setNuevoEmail( 'nuevo_email_jsantamaria@domino.com' )</i></b> : " .$nuevo = $jos->setNuevoEmail('nuevo_email_jsantamaria@domino.com');
echo "<br><br>";
echo "<hr style='border: indigo 1px solid;'>";

echo "<b><h6>Retorno de propiedad protegida (codigo) con un Getter</h6></b><br>";
echo "<b>Retorno: <i>getCodigo( )</i></b> : " . $jos->getCodigo();

echo "<br><b>Retorno: <i>setCodigo( setCodigo )</i></b> : " .$nuevo = $jos->setCodigo(97375);
// var_dump($nuevo);





