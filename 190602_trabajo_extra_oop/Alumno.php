<?php

	class Alumno
  //los atributos en privado
	{
		private $name;
		private $lastName;
		private $id;

    // creo la función para construir los atributos
		public function __construct($theName, $theLastName)
		{
			$this->name = $theName;
			$this->lastName = $theLastName;
		}

    // los geters

    // el get del nombre

		public function getName() {
			return $this->name;
		}

		public function getLastName() {
			return $this->lastName;
		}

    // el geter del apellido

	}
