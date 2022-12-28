<?php
require_once("lib/nusoap.php");

$namespace = "http://localhost:8888/clase11/servidor.php";
$server = new soap_server();
$server->configureWSDL("MiServicioWeb", $namespace);
$server->schemTargetNamespace = $namespace;
$server->soap_defencoding = "UTF-8";

//FUNCIONES
function holaMundo(){
	return "HOLA MUNDO!!!";
}

function suma($valor1, $valor2){
	return $valor1 + $valor2;
}

function resta($valor1, $valor2){
	return $valor1 - $valor2;
}

function listaPelis(){
	require_once("connection.php");
	$misPelis = array();
	$con = mysqli_connect($host, $user, $password, $db_name);
	$query = "select id_pelicula, titulo, sinopsis, nombre as director from pelicula, 
		director where director = id_director;";
	$pelis = mysqli_query($con, $query);
	while($peli=mysqli_fetch_assoc($pelis)){
		$misPelis[] = $peli;
	}

	mysqli_close($con);
	return $misPelis;
}

//DEFINICIÓN DE TIPOS COMPLEJOS//

$server->wsdl->addComplexType(
	'Peli',
	'complexType',
	'struct', // podemos poner 'array'
	'sequence',
	'',
	array(
	      'id_pelicula' => array('name'=>'id_pelicula', 'type'=>'xsd:int'),
	      'titulo' => array('name'=>'titulo', 'type'=>'xsd:sting'),
	      'sinpsis' => array('name'=>'sinopsis', 'type'=>'xsd:sting'),
	      'director' => array('name'=>'director', 'type'=>'xsd:string'))
);

$server->wsdl->addComplexType(
	'ArrayPelis',
	'ComplexType',
	'array',
	'',
	'SOAP-ENC:Array',
	array(),
	array(array('ref'=>'SOAP-ENC:arrayType','wsdl:arrayType'=>'tns:Peli[]')),
	'tns:Peli'
);



//REGISTRO DE FUNCIONES
$server->register(
		'holaMundo',	//Nombre función a ejecutar
		array(),		//Parámetros de entrada de la función
		array('return'=>'xsd:string'),		//Valores devueltos por la función
		$namespace,
		false,
		'rpc',
		'encoded',
		'Función que devuelve un  mensaje de saludo.'
);
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

$server->register(
	'listaPelis',
	array(),
	array('return'=>'tns:ArrayPelis'),
	$namespace,
	false,
	'rpc',
	'encoded',
	'Función que devuelve un array con los datos de las peliculas almacenadas en 
		la base de datos.'
);

$server->service(file_get_contents("php://input"));
?>