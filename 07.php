<?php
include 'includes/header.php';
//Agregado de metodos para nuestra clase.
class Empleado {

     //Definicion de atributos   public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    //Constructor
    public function __construct($_nombre, $_apellido, $_departamento, $_email, $_codigo){
 
         $this->nombre = $_nombre;
         $this->apellido = $_apellido;
         $this->departamento = $_departamento;
         $this->email = $_email;
         $this->codigo = $_codigo;

         /**
          * Llamada de funcion dentro de la clase, usamos nuevamente $this->nombreMetodo();
         */
                //$this->nombreEmpleado(); 
        /**
         * En este caso se nos mostrara DOS veces porque este metodo es llamado cada vez que se hace una nueva instancia.
        */
    }

    //Metodo 1 (nombre)
    public function nombreEmpleado()
    {//podemos acceder a las propiedades de la clase desde este metodo usando $this nuevamente.
        echo $this->nombre . " " . $this->apellido;
    }

     //Metodo 2 departamento
     public function departamentoEmpleado()
     {//hacemos el retorno del valor de una de las propiedades de la clase (departamento)
         return $this->departamento;
     }

}

$jos = new Empleado('Jos [On Constructor]','Cervantes','TI','jsantamaria@dominio.com',97175);
/**Podemos llamar la funcion de una clase, poniendo el nombre de la 
 * instancia,flecha y nombreDelMetodo 
 * $jos->nombreEmpleado();
*/
//$jos->nombreEmpleado();

$maf = new Empleado('Maf [On Constructor]','Manzanero','Turin','m.manz@dominio.com',97175);


echo "<pre>";
var_dump($jos);
echo "</pre>";

echo "<pre>";
var_dump($maf);
echo "</pre>";

echo "<hr><b><h6>Accediendo a un metodo( *nombreEmpleado( )* ) desde una de las instancias</h6></b>";
echo $jos->nombreEmpleado();
echo "<br>";
echo $maf->nombreEmpleado();

echo "<hr><b><h6>Retorno de propiedad (*departamento*) desde una de las instancias</h6></b>";

echo '</br>$jos->departamentoEmpleado( ) :';
$departamento1 = $jos->departamentoEmpleado();
echo $departamento1;

echo '</br> </br> $maf->departamentoEmpleado( ) : ';
$departamento2 = $maf->departamentoEmpleado();
echo $departamento2;
