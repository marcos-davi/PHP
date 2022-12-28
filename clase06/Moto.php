<?php
require_once("Vehiculo.php");

class Moto extends Vehiculo {
	private $tipo;
	function __construct($marca, $modelo, $potencia, $tipo){
		parent::__construct($marca, $modelo, $potencia, $tipo);
		$this->tipo =$tipo;

	}
	//GETTERS
	function get_tipo(){
		return $this->tipo;
	}
	//SETTERS
	function set_tipo($tipo){
		$this->tipo=$tipo;
	}
	function levantar_rueda(){
		return"LEVANTANDO RUEDA!!";
	}
	function __toString(){
		return "MOTO:<br/>".parent::__toString().
			" | Tipo: ".$this->tipo."<br>";
	}

	
	}
?>