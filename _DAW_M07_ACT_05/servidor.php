<?php
require_once("lib/nusoap.php");

$namespace = "http://localhost:8888/DAW_M07_ACT_05/servidor.php";
$server = new soap_server();
$server->configureWSDL("MiServicioWeb", $namespace);
$server->schemTargetNamespace = $namespace;
$server->soap_defencoding = "UTF-8";

//FUNCIONES


function listaProductosCat(){
	require_once("conexion.php");
	$misProductos = array();
	$con = mysqli_connect($host, $user, $password, $db_name);
	$consulta = "select id_producto, nombre_producto, nombre_categoria from PRODUCTO 
				inner join CATEGORIA 
				on categoria = id_categoria;";
	$productos = mysqli_query($con, $consulta);
	while($producto=mysqli_fetch_assoc($productos)){
		$misProductos[] = $producto;
	}
	mysqli_close($con);
	return $misProductos;
}





function listaProductos($tipo_categoria){
	require_once("conexion.php");
	$misProductos = array();
	$con = mysqli_connect($host, $user, $password, $db_name);
	$consulta = "select id_producto, nombre_producto, nombre_categoria from PRODUCTO 
				inner join CATEGORIA 
				on categoria = id_categoria
				where nombre_categoria ='$tipo_categoria';";
	$productos = mysqli_query($con, $consulta);
	while($producto=mysqli_fetch_assoc($productos)){
		$misProductos[] = $producto;
	}
	mysqli_close($con);
	return $misProductos;
}

function listaCategorias(){
	require_once("conexion.php");
	$misCategorias = array();
	$con = mysqli_connect($host, $user, $password, $db_name);
	$consulta = "select nombre_categoria from CATEGORIA;";
	$categorias = mysqli_query($con, $consulta);
	while($categoria=mysqli_fetch_assoc($categorias)){
		$misCategorias[] = $categoria;
	}
	mysqli_close($con);
	return $misCategorias;
}




//DEFINICIÓN DE TIPOS COMPLEJOS//

$server->wsdl->addComplexType(
	'ProductoCat',
	'complexType',
	'struct', // podemos poner 'array'
	'sequence',
	'',
	array(
	      'id_producto' => array('name'=>'id_producto', 'type'=>'xsd:int'),
	      'nombre_producto' => array('name'=>'nombre_producto', 'type'=>'xsd:sting'),
	      'nombre_categoria' => array('name'=>'nombre_categoria', 'type'=>'xsd:string'))
);

$server->wsdl->addComplexType(
	'ArrayProductosCat',
	'ComplexType',
	'array',
	'',
	'SOAP-ENC:Array',
	array(),
	array(array('ref'=>'SOAP-ENC:arrayType','wsdl:arrayType'=>'tns:Producto[]')),
	'tns:Producto'
);



$server->wsdl->addComplexType(
	'Producto',
	'complexType',
	'struct', // podemos poner 'array'
	'sequence',
	'',
	array(
	      'id_producto' => array('name'=>'id_producto', 'type'=>'xsd:int'),
	      'nombre_producto' => array('name'=>'nombre_producto', 'type'=>'xsd:sting'),
	      'nombre_categoria' => array('name'=>'nombre_categoria', 'type'=>'xsd:string'))
);

$server->wsdl->addComplexType(
	'ArrayProductos',
	'ComplexType',
	'array',
	'',
	'SOAP-ENC:Array',
	array(),
	array(array('ref'=>'SOAP-ENC:arrayType','wsdl:arrayType'=>'tns:Producto[]')),
	'tns:Producto'
);

$server->wsdl->addComplexType(
	'Categoria',
	'complexType',
	'struct', // podemos poner 'array'
	'sequence',
	'',
	array(
	      //'identificador' => array('name'=>'identificador', 'type'=>'xsd:int'),
	      'nombre_categoria' => array('name'=>'nombre_categoria', 'type'=>'xsd:string'))
);

$server->wsdl->addComplexType(
	'ArrayCategorias',
	'ComplexType',
	'array',
	'',
	'SOAP-ENC:Array',
	array(),
	array(array('ref'=>'SOAP-ENC:arrayType','wsdl:arrayType'=>'tns:Categoria[]')),
	'tns:Categoria'
);



//REGISTRO DE FUNCIONES

$server->register(
	'listaProductosCat',
	array(),
	array('return'=>'tns:ArrayProductos'),
	$namespace,
	false,
	'rpc',
	'encoded',
	'Función que devuelve un array con los datos de las peliculas almacenadas en 
		la base de datos.'
);

$server->register(
	'listaProductos',
	array('tipo_categoria'=>'xsd:string'),
	array('return'=>'tns:ArrayProductos'),
	$namespace,
	false,
	'rpc',
	'encoded',
	'Función que devuelve un array con los datos de las peliculas almacenadas en 
		la base de datos.'
);

$server->register(
	'listaCategorias',
	array(),
	array('return'=>'tns:ArrayCategorias'),
	$namespace,
	false,
	'rpc',
	'encoded',
	'Función que devuelve un array con los datos de las peliculas almacenadas en 
		la base de datos.'
);



$server->service(file_get_contents("php://input"));
?>