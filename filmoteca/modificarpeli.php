	<?php
	session_start();
	require("database.php");
	$con = conectar();

	if(isset($_POST['modificar'])){
		$titulo = $_POST['titulo'];
		$director = $_POST['director'];
		$sinopsis = $_POST['sinopsis'];
		$consulta = "update pelicula set titulo='$titulo', director ='$director', sinopsis='$sinopsis'  where id_pelicula=".$_SESSION['id_pelicula'];
		$resultado = realizar_consulta($con, $consulta);
		header("Location: index.php");

	}else
	{
		$id_peli = $_GET['id'];
		$_SESSION['id_pelicula'] = $id_peli;
		$consulta = "select * from pelicula where id_pelicula=$id_peli";
	$resultado = realizar_consulta($con, $consulta);
	$num_filas = obtener_num_filas($resultado);
	if($num_filas == 0){
		header("Location: index.php");
	}
	else{
		$pelicula = obtener_resultados($resultado);
		extract($pelicula);
		$consulta = "select * from director";
		$resultado = realizar_consulta($con, $consulta);
		echo "<form method='post' action='".$_SERVER['PHP_SELF']."'>
				Título:<input type='text' name='titulo' value='$titulo'><br>
				Director:<select name='director'>";
				while ($fila_director=obtener_resultados($resultado)) {
					extract($fila_director);
					if($id_director == $director){
					  echo "<option selected value='$id_director'>$nombre</option>"; 
				}
				else{
					echo "<option value='$id_director'>$nombre</option>";
				}
			}

				echo"</select><br>
				    Sinopsis: <input type='text' name ='sinopsis' value='$sinopsis'><br>
				    <input type='submit' name='modificar' value='modificar'></form>";


	}

	}
cerrar_conexion($con);


	?>

