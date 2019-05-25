<?php
   abstract class Usuario {
   protected $nombre;
   protected $fechaNacimiento;
   protected $email;
   protected $documento;
   protected $paisNacimiento;

   public function __construct($elNombre, $laFechaNacimiento)
   {
     $this->setNombre($elNombre);
     $this->setFechaNacimiento($laFechaNacimiento);
   }

   public function getNombre()
   {
     return $this->nombre;
   }

   public function getFechaNacimiento()
   {
     return $this->fechaNacimiento;
   }

   public function getEmail()
   {
     return $this->email;
   }

   public function setNombre($unNombre)
   {
     $this->nombre = $unNombre;
   }

   public function setFechaNacimiento($laFechaNacimiento)
   {
     $this->fechaNacimiento = $laFechaNacimiento;
   }

   public function setEmail($elEmail)
   {
     $this->email = $elEmail;
   }

 }

 /**
  *
  */
 interface InterfaceName
 {
   // code...
 }



 /**
  *
  */
 class Docente extends Usuario
 {

   function __construct(argument)
   {
     // code...
   }
 }


 // $usuario1 = new Usuario("oscar", "14 de nov");
 //
 // echo "<pre>";
 // var_dump($usuario1);
 // echo "</pre>";

 // $usuario1->setEmail("dgdfg@dsfd.com");
 //
 // echo "<pre>";
 // echo $usuario1->getNombre();
 // echo "</pre>";
 //
 // echo "<pre>";
 // echo $usuario1->getFechaNacimiento();
 // echo "</pre>";
 //
 // echo "<pre>";
 // echo $usuario1->getEmail();
 // echo "</pre>";














 ?>
