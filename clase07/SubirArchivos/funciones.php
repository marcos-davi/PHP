<?php
function sube_imagen(){
	$extension = pathinfo($_FILES['archivo']['name'], PATHINFO_EXTENSION);
	$extensiones_validas = array("","jpg","gif","JPG","jpeg", "png");
	$encontrado = array_search($extension, $extensiones_validas, false);
	if($encontrado!=false){
		if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
			move_uploaded_file($_FILES['archivo']['tmp_name']
				, "images/".time().".".$extension);
			return 0; //Imagen subida

		}else{
			return 1; //Error al subir la imagen
		}
	}else{
		return 2; //Extensión no es válida
	}
}

?>