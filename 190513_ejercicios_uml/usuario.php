<?php
  class Usuario {
    private $nombre;
    private $fechaNacimiento;
    private $email;

    public function __construct(string $elNombre, string $laFecha, string $elMail)
    {
      $this->setNombre($elNombre);
      $this->setFecha($laFecha);
      $this->setMail($elMail);
    }

    public function setNombre(string $texto)
		{
			$this->nombre = $texto;
		}
    public function setFecha(string $texto)
		{
      $this->fecha = $texto;
		}
    public function setMail(string $texto)
		{
      $this->mail = $texto;
		}




  }







?>
