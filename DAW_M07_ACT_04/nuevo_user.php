<?php
require("basededados.php");
$bdd = conectar();
$dni= $_POST['dni'];
$apellido =$_POST['apellido'];
$tipo_usuario=$_POST['tipo_usuario'];

$consulta = "insert into USUARIO (dni, apellido, tipo_usuario) values('$dni','$apellido', $tipo_usuario)";
$resultado = realizar_consulta($bdd, $consulta);
cerrar_conexion($bdd);
header("Location: index.php");



cerrar_conexion($bdd);

?>