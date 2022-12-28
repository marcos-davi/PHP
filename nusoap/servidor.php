<?php
require_once("lib/nusoap.php");

$namespace = "http://localhost:8888/nusoap/servidor.php";
//create a new soap server
$server = new soap_server();
$server->configureWSDL("MiServicioWeb", $namespace);
$server->schemTargetNamespace = $namespace;
$server->soap_defencoding = "UTF-8";

/////////////////////Definir Funciones/////////////////////////////

function suma($valor1, $valor2){
	return $valor1 + $valor2;
}

function resta($valor1, $valor2){
	return $valor1 - $valor2;
}

//////////////REGISTRO DE METODOS//////////////

$server->register(
		'suma',
		array('valor1'=>'xsd:int', 'valor2'=>'xsd:int'),
		array('return'=>'xsd:int'),
		$namespace,
		false,
		'rpc',
		'encoded',
		'Función que recibe dos enteros y devuelve su suma.'
);

$server->register(
		'resta',
		array('valor1'=>'xsd:int', 'valor2'=>'xsd:int'),
		array('return'=>'xsd:int'),
		$namespace,
		false,
		'rpc',
		'encoded',
		'Función que recibe dos enteros y devuelve su resta.'
);

//////////////Iniciar el servicio y mantener la escucha//////////////

$server->service(file_get_contents("php://input"));
?>