<?php
include 'includes/header.php';

class Empleado{
    //Creacion de atributos
    
    
     }

/**
  * Variable empleado, al tener la palabra reservada 'new' , crea una nueva instancia del
  * Objeto el cual va a instanciar, en este caso Empleado.
*/
 $empleado = new Empleado;//puede llevar los '( )' pero no es obligatorio
 /**
  *Podemos tener multiples instancias de una clase, pero no multiples clases con igual nombre.
  */
 $empleado2 = new Empleado;
 $empleado3 = new Empleado;
 $empleado4 = new Empleado;

 
 echo "<pre>";
 var_dump($empleado);
 echo "</pre>";

 echo "<pre>";
 var_dump($empleado2);
 echo "</pre>";
 echo "<pre>";
 var_dump($empleado3);
 echo "</pre>";
 echo "<pre>";
 var_dump($empleado4);
 echo "</pre>";