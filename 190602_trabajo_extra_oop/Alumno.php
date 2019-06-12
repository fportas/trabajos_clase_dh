<?php

	class Alumno
  //los atributos en privado
	{
		protected $name;
		protected $lastName;
		protected $id;

    // creo la función para construir los atributos
		public function __construct(string $theName, string $theLastName)
		{
			$this->name = $theName;
			$this->lastName = $theLastName;
		}

    // los geters

    // el get del nombre

		public function getName() {
			return $this->name;
		}
		// el geter del apellido

		public function getLastName() {
			return $this->lastName;
		}

		// seters

		public function setName($name){
			$this->name = $name;
		}

		public function setLastName($theLastName){
			$this->lastName = $theLastName;
		}


	}
