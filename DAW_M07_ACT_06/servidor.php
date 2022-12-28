<?php
//DAW_M07_ACT_06_Marcos_Davi_Carvalho_dos_Santos
require_once("lib/nusoap.php");

$namespace = "http://localhost:8888/DAW_M07_ACT_06/servidor.php";
$server = new soap_server();
$server->configureWSDL("MiServicioWeb", $namespace);
$server->schemTargetNamespace = $namespace;
$server->soap_defencoding = "UTF-8";

//FUNCIONES

function listaTipos(){
	require_once("conexion.php");
	$misTipos = array();
	$con = mysqli_connect($host, $user, $password, $db_name);
	$consulta = "select distinct tipo from locales order by tipo;";
	$tipos = mysqli_query($con, $consulta);
	while($tipo=mysqli_fetch_assoc($tipos)){
		$misTipos[] = $tipo;
	}
	mysqli_close($con);
	return $misTipos;
}


function listaPoblaciones(){
	require_once("conexion.php");
	$misPoblaciones = array();
	$con = mysqli_connect($host, $user, $password, $db_name);
	$consulta = "select distinct poblacion from locales order by poblacion;";
	$poblaciones = mysqli_query($con, $consulta);
	while($poblacion=mysqli_fetch_assoc($poblaciones)){
		$misPoblaciones[] = $poblacion;
	}
	mysqli_close($con);
	return $misPoblaciones;
}




//DEFINICIÓN DE TIPOS COMPLEJOS//


$server->wsdl->addComplexType(
	'Tipo',
	'complexType',
	'struct', // podemos poner 'array'
	'sequence',
	'',
	array(
	      //'identificador' => array('name'=>'identificador', 'type'=>'xsd:int'),
	      'tipo' => array('name'=>'tipo', 'type'=>'xsd:string'))
);

$server->wsdl->addComplexType(
	'ArrayTipos',
	'ComplexType',
	'array',
	'',
	'SOAP-ENC:Array',
	array(),
	array(array('ref'=>'SOAP-ENC:arrayType','wsdl:arrayType'=>'tns:Categoria[]')),
	'tns:Tipo'
);

$server->wsdl->addComplexType(
	'Poblacion',
	'complexType',
	'struct', // podemos poner 'array'
	'sequence',
	'',
	array(
	      //'identificador' => array('name'=>'identificador', 'type'=>'xsd:int'),
	      'poblacion' => array('name'=>'poblacion', 'type'=>'xsd:string'))
);

$server->wsdl->addComplexType(
	'ArrayPoblaciones',
	'ComplexType',
	'array',
	'',
	'SOAP-ENC:Array',
	array(),
	array(array('ref'=>'SOAP-ENC:arrayType','wsdl:arrayType'=>'tns:Poblacion[]')),
	'tns:Poblacion'
);



//REGISTRO DE FUNCIONES



$server->register(
	'listaTipos',
	array(),
	array('return'=>'tns:ArrayTipos'),
	$namespace,
	false,
	'rpc',
	'encoded',
	'Función que devuelve un array con los datos de tipos  almacenados en 
		la base de datos.'
);

$server->register(
	'listaPoblaciones',
	array(),
	array('return'=>'tns:ArrayPoblaciones'),
	$namespace,
	false,
	'rpc',
	'encoded',
	'Función que devuelve un array con los datos de las poblaciones almacenadas en 
		la base de datos.'
);



$server->service(file_get_contents("php://input"));
?>