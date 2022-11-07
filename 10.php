<?php
include 'includes/header.php';
/**
 * Persona es nuestra clase principal que tiene propiedades compartidas entre la entidad / clase
 * Empleado y Proveedor.
 * Incluso podemos hacer la herencia de un constructor, mientras haga uso de las propiedaded comunes entre estas.
 */
class Persona 
{
  protected $nombre; 
  protected $apellido;
  protected $email;
  protected $telefono;
  /**
   * Constructor - Utiliza propiedades comunes para las clases heredadas.
   */
  public function __construct($_nombre, $_apellido, $_email, $_telefono){
    $this->nombre = $_nombre;
    $this->apellido = $_apellido;
    $this->email = $_email;
    $this->telefono = $_telefono;
  }

  /**
   * Cortamos el metodo mostrarInformacion de las clases hijas, se pasa al padre y asi se puede heredar a
   * las clases que hagan uso a traves del extends del padre.
   * (mientras use propiedades compartidas, no se tendran problemas).
   * En caso de declararla como 'static' este metodo, no se podra sobre escribir.
   */
  public  function mostrarInformacion(){ //en caso de declarar una funcion como protected, no podremos acceder directamente a esta.
    echo "Nombre: ".$this->nombre." ".$this->apellido."</br> Email: ".$this->email;
  }

  //Nueva funcion añadida (en caso de escalar o crecer el codigo es mas sencillo de mantener con las herencias adecuadas)
  //getter;

  public function getTelefono(){
    return $this->telefono;
  }

}

/**
 * Herencia de clase
 */
 class Empleado extends Persona
 { //propiedades

   protected $codigo;
   protected $departamento;

   public function __construct($_nombre, $_apellido, $_email, $_telefono, $_codigo,$_departamento){
   /**
    * Accedemos a la clase padre, usamos la resolucion de ambito :: para acceder al contructor(metodo static) y pasar los parametros en común.
    */
    parent::__construct($_nombre, $_apellido, $_email, $_telefono);
    
  /**
   * En el constructor de la clase que hace herencia, solo se ponen los parametros que no se comparten y son especificos de esta misma.
   * en este caso codigo y departamento.
   */
    $this->codigo = $_codigo;
    $this->departamento = $_departamento;
  }
    /**
     * Mostrar la informacion del empleado //Esta funcion/metodo se paso a la clase padre
     *
     *public function mostrarInformacion(){
     *echo "Nombre: ".$this->nombre." ".$this->apellido." Email ".$this->email;
     *}
     */
}

 class Proveedor extends Persona
 {//propiedades
    protected $empresa;

    public function __construct($_nombre,  $_apellido, $_email, $_telefono, $_empresa){      
      parent::__construct($_nombre,  $_apellido, $_email, $_telefono);
      $this->empresa = $_empresa; 
    }
    
    /**
     * Podemos tomar un metodo del padre y modificarlo en la clase heredada, asi ya no tomara el que viene por defecto
     * en este caso modificamos el metodo unicamente en la clase hija de @class Proveedor{}
     * @method
     */
    public function mostrarInformacion(){
      echo "Nombre: ".$this->nombre." ".$this->apellido."</br>Email de la empresa: ".$this->email;
    }

  }
 

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
