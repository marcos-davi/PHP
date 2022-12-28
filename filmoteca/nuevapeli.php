<?php
require("database.php");
$con = conectar();
$titulo = $_POST['titulo'];
$director = $_POST['director'];
$sinopsis = $_POST['sinopsis'];

$consulta = "insert into pelicula(titulo, sinopsis,director) values('$titulo', '$sinopsis', $director)";
$resultado = realizar_consulta($con, $consulta);
cerrar_conexion($con);
header("Location: index.php");
?>