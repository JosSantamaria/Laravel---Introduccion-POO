<?php
include 'includes/header.php';
/**
 * @abstract Class - Persona : Cuando una clase esta definida como abstracta, esta no se puede instanciar como las demas, es decir no se puede hacer
 * $persona = new Persona($parametros...);
 * *Unicamente sirve para poder realizar la herencia de clases y poder utilizar sus valores, luego de la herencia, la clase hija que no sea
 *  @abstract, mas bien puede ser una clase modelo que usa propiedades comunes, utilizables para las demas.
 */

abstract class Persona 
{
  protected $nombre; 
  protected $apellido;
  protected $email;
  protected $telefono;
 
  public function __construct($_nombre, $_apellido, $_email, $_telefono){
    $this->nombre = $_nombre;
    $this->apellido = $_apellido;
    $this->email = $_email;
    $this->telefono = $_telefono;
  }

  public  function mostrarInformacion(){
    echo "Nombre: ".$this->nombre." ".$this->apellido."</br> Email: ".$this->email;
  }

  public function getTelefono(){
    return $this->telefono;
  }

}

 class Empleado extends Persona
 {
   protected $codigo;
   protected $departamento;
   public function __construct($_nombre, $_apellido, $_email, $_telefono, $_codigo,$_departamento){
    parent::__construct($_nombre, $_apellido, $_email, $_telefono);
    $this->codigo = $_codigo;
    $this->departamento = $_departamento;
  }
    
}

 class Proveedor extends Persona
 {//propiedades
    protected $empresa;
    public function __construct($_nombre,  $_apellido, $_email, $_telefono, $_empresa){      
      parent::__construct($_nombre,  $_apellido, $_email, $_telefono);
      $this->empresa = $_empresa; 
    }
    public function mostrarInformacion(){
      echo "Nombre: ".$this->nombre." ".$this->apellido."</br>Email de la empresa: ".$this->email;
    }

  }
 
/**
 * Instancia de clase padre - persona{}.
 */
/*
echo "<hr style='border:indigo 1px solid;' > <h6> Instancia de clase padre: Persona{ }</h6>  ";
$persona = new Persona('Una Persona','Apellido Persona', 'email_persona@dominio.com',999900110);
echo "<pre>";
var_dump($persona);
echo "</pre>";

echo "<hr style='border:indigo 1px solid;'>";
*/
$empleado = new Empleado('Joset', 'Santamaria','jsantamaria.ti@correo.com',9992467059,2072,'TI');

$proveedor = new Proveedor('Mafer', 'Manzanero','mmanzanero.adc@correo.com','9992726098','Amor de chocolate');

echo "<pre>";
var_dump($empleado);
echo "</pre>";


echo "<hr style='border:indigo 1px solid;' > <h6> Proveedor Datos:</h6>  ";

echo "<pre>";
var_dump($proveedor);
echo "</pre>";
echo "<hr style='border:indigo 1px solid;' > <b><h6> Funcion mostrarInformacion( ):</h6></b>  ";

$empleado->mostrarInformacion();
echo "</br>";

$proveedor->mostrarInformacion();

echo "<hr style='border:indigo 1px solid;' > <b><h6> Funcion (getter) getTelefono( ):</h6></b>  ";

echo "El Telefono es: " . $empleado->getTelefono();

echo "</br>";

echo "El Telefono es: " . $proveedor->getTelefono();
