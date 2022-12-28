<?php
require_once("funciones.php");
$resultado = sube_imagen();
if($resultado==0){
	echo "Imagen subida";
}else if ($resultado==1){
	echo "Error al subir la imagen";
}else{
	echo "Extension no válida";
}
?>