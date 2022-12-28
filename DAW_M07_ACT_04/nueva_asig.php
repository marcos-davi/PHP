<?php
require("basededados.php");
$bdd = conectar();
$nombre= $_POST['nombre'];

$consulta = "insert into ASIGNATURA (nombre) values('$nombre');";
$resultado = realizar_consulta($bdd, $consulta);
cerrar_conexion($bdd);
header("Location: index.php");

echo"<br><form method='post' action='cerrarcon.php'>
<input type='submit' name ='crear' value ='Cerrar Conexión'>
</form><br>";

cerrar_conexion($bdd);

?>