<?php

require("basededados.php");
$bdd = conectar();
$dni= $_POST['dni'];
$nombre_asignatura= $_POST['nombre_asignatura'];


$consulta = "delete from ASIGNATURA where $nombre='$nombre_asignatura'";
$resultado = realizar_consulta($bdd, $consulta);
$consulta = "delete from USUARIO where $dni='$dni'";
$resultado = realizar_consulta($bdd, $consulta);
cerrar_conexion($bdd);
header("Location: index.php");

echo"<br><form method='post' action='cerrarcon.php'>
<input type='submit' name ='crear' value ='Cerrar Conexión'>
</form><br>";

cerrar_conexion($bdd);

?>