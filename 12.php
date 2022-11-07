<?php
include 'includes/header.php';

//Metodos estaticos (' Static ')
class Empleado {
    //public, private, protected
   public static $nombre;  //propiedad estatica (no depende de la instancia)
   public $apellido;
   public $departamento;
   protected $email;
   public $codigo;

   public function __construct($_nombre, $_apellido, $_departamento, $_email, $_codigo){
    /**
     * para asignar una propiedad estatica, accedemos a self(uno mismo) :: $propiedad y luego hacemos la asignacion
     * desde el constructor con = $_pametro
     */
    self::$nombre = $_nombre; 
        
        //$this: para referencia/uso de propiedades no static.
        $this->apellido = $_apellido;
        $this->departamento = $_departamento;
        $this->email = $_email;
        $this->codigo = $_codigo;
   }

    public function nombreEmpleado(){
        echo $this->nombre . " " . $this->apellido;
    }
    public function departamentoEmpleado(){
        return $this->departamento;
    }
    public function retornaEmailEmpleado(){
        return $this->email;
    }
    public function nuevoEmailEmpleado($nuevoEmail){
        return $this->email = $nuevoEmail; 
    }

    public static function obtenerEmpleado()
    {
        echo "Hola desde metodo Estatico";
    }

    /**
     * Usamos un getter para obtener y retornar un resultado, en este caso, el valor de una propiedad public tipo: static.
     */

    public static function getNombre()
    {
        return self::$nombre;
    }
}
//El llamado al metodo estatico, no necesita una instncia.
// Empleado::obtenerEmpleado();

$jos = new Empleado('Jos [propiedad static]','Cervantes','TI','jsantamaria@dominio.com',97175);

echo  $jos::getNombre();

//Mostrar datos:
echo "<pre>";
var_dump($jos);
echo "</pre>";
