<?php
require_once ("Vehiculo.php");
class Coche extends Vehiculo {
	private $puertas;
	private static $ruedas = 4;

	function __construct($marca, $modelo, $potencia, $puertas) {
		parent::__construct($marca, $modelo, $potencia);
		$this->puertas = $puertas;
	}

	function get_puertas() {
		return $this->puertas;
	}

	function set_puertas($puertas) {
		$this->puertas = $puertas;
	}

	static function set_ruedas($ruedas) {
		self::$ruedas = $ruedas;
	}

	function __toString() {
		return "COCHE:<br>".parent::__toString().
		" | Puertas: ".$this->puertas.
		" | Ruedas: ".self::$ruedas." | Prueba: ".$this->prueba."<br>";
	}
}

?>