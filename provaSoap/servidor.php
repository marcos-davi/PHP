<?php



require_once("lib/nusoap.php");
$namespace ="http://localhost:8888/provaSoap/servidor.php";
//create a new soap server
$server = new soap_server();
$server->configureWSDL("MiWebService");
$server->schemaTargetNamespace = $namespace;
$server->soap_defencoding = 'UTF-8';

//////////////////////////////////////////////////

function holaMundo(){
	return "Hola, Mundo!!!";
}

function holaMundo2($nombre){
	return "Hola, ".$nombre."!!!";
}

function suma($valor1, $valor2){
	return $valor1 +  $valor2;
}



//////////////REGISTRO DE METODOS//////////////

$server->register(
	'holaMundo',
	array(),
	array('return' => 'xsd:string'),
	$namespace,
	false,
	'rpc',
	'encoded',
	'Método Hello World por exelencia'
);

$server->register(
	'holaMundo2',
	array('nombre' => 'xsd:string'),
	array('return' => 'xsd:string'),
	$namespace,
	false,
	'rpc',
	'encoded',
	'Método que devuelve el saludo con el parametro enviado'
);

$server->register(
	'suma',
	array('valor1' => 'xsd:int', 'valor2' => 'xsd:int'),
	array('return' => 'xsd:int'),
	$namespace,
	false,
	'rpc',
	'encoded',
	'Método que devuelve ela suma de los parametros enviado'
);

$server->service(file_get_contents("php://input"));



?>