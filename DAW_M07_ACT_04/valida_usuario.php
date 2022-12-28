<?php
session_start();

require("basededados.php");
$dni = $_POST['dni'];
$apellido= $_POST['apellido'];
if (isset($dni)) {
	
	header("Location: index.php");
}

$bdd = conectar();
$consulta = "select tipo_usuario from usuario where dni = '$dni' and apellido ='$apellido';";
$resultado = realizar_consulta($bdd, $consulta);
//$num_filas = obtener_num_filas($resultado);



while ($fila = obtener_resultados($resultado)){
	extract($fila);
	if($tipo_usuario ==0){
		header("Location: admin.php");
	}else{
		$_SESSION['dni']=$dni;
		$_SESSION['apellido']=$apellido;


		header("Location: user_normal.php");

	}
}
echo"<br><form method='post' action='cerrarcon.php'>
<input type='submit' name ='crear' value ='Cerrar Conexión'>
</form><br>";

cerrar_conexion($bdd);
?>