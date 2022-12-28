<?php
require("database.php");
$con = conectar();
$codigos = $_POST['borrar'];
$consulta = "delete from pelicula where id_pelicula in(";
foreach ($codigos as $codigo) {
	$consulta = $consulta."$codigo, ";
}
$consulta = $consulta."0)";
$resultado = realizar_consulta($con, $consulta);
cerrar_conexion($con);
header("Location: index.php");

?>