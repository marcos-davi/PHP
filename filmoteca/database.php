<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db_name = "filmoteca";

function conectar(){
	$con = mysqli_connect($GLOBALS["host"], $GLOBALS["user"],$GLOBALS["pass"],$GLOBALS["db_name"]) or die("Error de conexión con la base de datos");
	return $con;
}

function realizar_consulta($con, $consulta){
	$resultado = mysqli_query($con, $consulta);
	return $resultado;
}

function obtener_num_filas($resultado){
	return mysqli_num_rows($resultado);
}

function obtener_resultados($resultado){
	return mysqli_fetch_array($resultado);
}

function cerrar_conexion($con){
	mysqli_close($con);
}

?>