<?php
class Persona{
	//Atributos
	 private $nombre;
	 private $apellidos;
	 private $edad;
	 private static $profesion = "Programador PHP";

	 var $variable;
	 private const CONSTANTE= 10;

	 function get_constante(){
	 	return self::CONSTANTE;
	 }

	//Métodos
	 function __construct($nombre, $apellidos, $edad){
	 	$this->nombre = $nombre;
	 	$this->apellidos = $apellidos;
	 	$this->edad = $edad;
	 }

	 //getters
	 function get_nombre(){
	 	return $this->nombre;
	 	}

	 	function get_apellidos(){
	 	return $this->apellidos;
	 	}

	 	function get_edad(){
	 	return $this->edad;
	 	}

	 	static function get_profesion(){
	 		return self::$profesion; //atributo estático
	 	}



	 //setters
	 function set_nombre($nombre){
	 	$this->nombre = $nombre;
	 }

	 function set_apellidos($napellidos){
	 	$this->apellidos = $apellidos;
	 }

	 function set_edad($edad){
	 	$this->edad = $edad;
	 }

	 static function set_profesion($profesion){
	 	self::$profesion = $profesion;
	 }

	 function __toString(){
	 	return "PERSONA:<br>Nombre:  ".$this->nombre." | Apellidos: ".$this->apellidos.
	 			"  | Edad: ".$this->edad." | Profesion: ".self::$profesion."<br>";
	 }

	 function __destruct(){
	 	echo "Me voy...<br>";

	 }
}
?>