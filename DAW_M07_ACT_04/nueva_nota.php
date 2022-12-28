<?php
require("basededados.php");
$bdd = conectar();
$dni= $_POST['dni'];
$nombre_asignatura= $_POST['nombre_asignatura'];
$nota= $_POST['nota'];

$consulta = "update NOTA set nota = $nota where alumno = '$dni';";
$resultado = realizar_consulta($bdd, $consulta);
cerrar_conexion($bdd);
header("Location: index.php");

echo"<br><form method='post' action='cerrarcon.php'>
<input type='submit' name ='crear' value ='Cerrar Conexión'>
</form><br>";

cerrar_conexion($bdd);

?>