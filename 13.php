<?php
include 'includes/header.php';
include 'DB.php';
/**
 * Comunicacion de dos o mas clases: 
 */
class Empleado {   
   public $nombre; 
   public $apellido;
   public $departamento;
   protected $email;
   public $codigo;
   public function __construct($_nombre, $_apellido, $_departamento, $_email, $_codigo){

        $this->nombre = $_nombre;
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
    public function getEmail(){
        return $this->email;
    }
    public function setNuevoEmail($nuevoEmail){
        return $this->email = $nuevoEmail; 
    }
    public function getCodigo(){
        
        return $this->codigo;
    }
    public function setCodigo($nuevoCodigo){
        
        return $this->codigo = $nuevoCodigo; 
    }

}

$jos = new Empleado('Jos [On Constructor]','Cervantes','TI','jsantamaria@dominio.com',97175);
//Obtenemos Email
$email = $jos->getEmail();

$db = new DB($email);
//depuracion del valor obtenido y asignado a $email.
var_dump($email);
echo "<hr style='border:indigo 1px solid;' > <h5>Operacion desde otra clase :</h5>  ";

$db->guardar();

