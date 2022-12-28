<?php
	$host = "localhost";
	$user = "root";
	$pass = "root";
	$db_name = "filmoteca";

	function conectar(){
		$bdd = new mysqli($GLOBALS["host"], $GLOBALS["user"],$GLOBALS["pass"],$GLOBALS["db_name"]) or die("Error de conexión 
			con la base de datos");
		return $bdd;
	}

	function realizar_consulta($bdd, $consulta){
		$resultado = $bdd->query($consulta);
		return $resultado;
	}

	function obtener_num_filas($resultado){
		return $resultado->num_rows;
	}

	function obtener_resultados($resultado){
		return $resultado -> fetch_array();
	}

	function cerrar_conexion($bdd){
		$bdd ->close();
	}

?>