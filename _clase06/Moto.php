<?php
require_once("Vehiculo.php");
class Moto extends Vehiculo {
	private $tipo;

	function __construct($marca, $modelo, $potencia, $tipo){
		parent::__construct($marca, $modelo, $potencia);
		$this->tipo = $tipo;
	}

	function get_tipo(){
		return $this->tipo;
	}

	function set_tipo($tipo){
		$this->tipo = $tipo;
	}

	function derrapar(){
		return "LEVANTANDO RUEDA!!!";
	}

	function __toString(){
		return "MOTO:<br/>".parent::__toString().
				" | Tipo: ".$this->tipo."<br/>";
	}
}
?>