<?php
require_once("conexion.php");
//require_once("lib/nusoap.php");

$con = mysqli_connect($host, $user, $password, $db_name);
$consulta = "select nombre_categoria from CATEGORIA;";
$resultado = mysqli_query($con, $consulta);
$num_filas = mysqli_num_rows($resultado);

echo "<h2>Elija una categoria</h2>
	<form name='escolha' action='cliente.php' method='post'>
		<label>Categoria </label><select name='categoria'><br>";
		while($fila = mysqli_fetch_array($resultado)){
                extract($fila);
                echo "<option value ='$nombre_categoria'>$nombre_categoria</option>";
            }
		
		echo "</select>
		<input type='submit' name='enviar'>
	</form>";

mysqli_close($con);
?>