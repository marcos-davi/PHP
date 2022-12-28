<?php
//HERENCIA

class Vehiculo {
	private $marca;
	private $modelo;
	private $potencia;
	protected $prueba = 10;

	function __construct($marca, $modelo, $potencia) {
		$this->marca    = $marca;
		$this->modelo   = $modelo;
		$this->potencia = $potencia;

	}

	function get_marca() {
		return $this->marca;
	}

	function get_modelo() {
		return $this->modelo;
	}

	function get_potencia() {
		return $this->potencia;
	}

	function set_marca($marca) {
		$this->marca = $marca;
	}

	function set_modelo($modelo) {
		$this->modelo = $modelo;
	}

	function set_potencia($potencia) {
		$this->potencia = $potencia;
	}

	function __toString() {
		return "Marca: ".$this->marca." | Modelo: ".$this->modelo.
		" | Potencia: ".$this->potencia;
	}

}
?>