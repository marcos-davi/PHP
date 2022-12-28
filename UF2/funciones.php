<?php
function validar_formulario(){
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	if(empty($nombre) || empty($apellido)){
		echo "Debes introducir tu nombre y apellido.<br/>";
	} else{
		echo "Hola $nombre $apellido<br/>;
	}

	
}
?>