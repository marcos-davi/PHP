<?php
require("database.php");
$bdd = conectar();
$titulo = $_POST['titulo'];
$director = $_POST['director'];
$sinopsis = $_POST['sinopsis'];

$consulta = "insert into pelicula(titulo, sinopsis,director) values('$titulo', '$sinopsis', $director)";
$resultado = realizar_consulta($bdd, $consulta);
cerrar_conexion($bdd);
header("Location: index.php");
?>