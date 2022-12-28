<?php
require("database.php");
$bdd = conectar();
$codigos = $_POST['borrar'];
$consulta = "delete from pelicula where id_pelicula in(";
foreach ($codigos as $codigo) {
	$consulta = $consulta."$codigo, ";
}
$consulta = $consulta."0)";
$resultado = realizar_consulta($bdd, $consulta);
cerrar_conexion($bdd);
header("Location: index.php");

?>