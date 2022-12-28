<?php
require_once("lib/nusoap.php");
$categoria = $_POST['categoria'];

$client = new soapclient("http://localhost:8888/DAW_M07_ACT_05/servidor.php?wsdl");


/*
echo "<h3>Funciones en el servidor</h3>";
$functions = $client->__getFunctions();
foreach($functions as $function){
	echo "<p>$function</p>";
}
echo "<br/>";


echo "<h4>$functions[0]</h4>";
echo "<h4>$functions[1]</h4>";
echo "<h4>$functions[2]</h4>";
*/

$result = $client->listaProductosCat();

	echo "<h1>Todos los productos</h1>";
	echo "<table border='1'>";
	echo "<tr>";

	echo"<th>ID</th>"; 
	echo"<th>Nombre</th>"; 
	echo"<th>Categoria</th>";
	echo "</tr>"; 
foreach($result as $producto) {
	$array = json_decode(json_encode($producto), true);
	
	echo "<tr>";
	//echo "<td>".$array["identificador"]."</td>"; //echo "<td>".$producto[1]."</td>"; 
	// con la opcion array en el primer addComplexType sin el json_decode
	
	echo "<td>".$array["id_producto"]."</td>";
	echo "<td>".$array["nombre_producto"]."</td>"; 
	echo "<td>".$array["nombre_categoria"]."</td>"; 
	echo "</tr>";
}
echo "</table><br>";



$result = $client->listaCategorias();

echo "<h3>Elija una categoria</h3>";
	echo "<form name='sel_categoria' action='".$_SERVER['PHP_SELF']."' method='post'>";
		echo "<label>Categoria </label><select name='categoria'><br>";		
		foreach($result as $nombre_categoria) {
			$array = json_decode(json_encode($nombre_categoria), true);
			
			
	
		echo "<option>".$array["nombre_categoria"]."</option>";			
		}
		echo "<input type='submit' value='selecionar'>";
		/*while($fila = mysqli_fetch_array($resultado)){
                extract($fila);
                echo "<option value ='$nombre_categoria'>$nombre_categoria</option>";
            }*/
		
		echo "</select>";
		
	 	echo"</form>";
	 	


$result = $client->listaProductos($categoria);

echo "<h2>Productos por categoria</h2>";
echo "<table border='1'>";
echo "<tr>";

	
	echo"<th>ID</th>"; 
	echo"<th>Nombre</th>"; 
	echo"<th>Categoria</th>";
	echo "</tr>"; 
foreach($result as $producto) {
	$array = json_decode(json_encode($producto), true);
	
	echo "<tr>";
	//echo "<td>".$array["identificador"]."</td>"; //echo "<td>".$peli[1]."</td>"; 
	// con la opcion array en el primer addComplexType sin el json_decode
	echo "<td>".$array["id_producto"]."</td>";
	echo "<td>".$array["nombre_producto"]."</td>"; 
	echo "<td>".$array["nombre_categoria"]."</td>"; 
	echo "</tr>";
}
echo "</table><br>";





?>