<?php
//require("Coche.php");
//require("Moto.php");
function cargar_clases($nombre_clase){
	require_once($nombre_clase.".php");
}
spl_autoload_register("cargar_clases");

$vehiculos = array();
$vehiculos[0] =  new Coche("Batmovil", "1989", 1000, 1);
$vehiculos[1] =  new Moto("Yamaha", "XMAX", 90, "Scooter");

foreach($vehiculos as $vehiculo){
	if($vehiculo instanceof Moto){
	echo $vehiculo->levantar_rueda()."<br>";	
	}
	echo $vehiculo."<br>";
	
}


?>