<?php
//DAW_M07_ACT_06_Marcos_Davi_Carvalho_dos_Santos
require_once("lib/nusoap.php");
$client = new soapclient("http://localhost:8888/DAW_M07_ACT_06/servidor.php?wsdl");


$result = $client->listaTipos();
echo "<h3>Elija un tipo de local</h3>";
	echo "<form name='sel_tipo' action='map.php' method='post' autocomplete='off'>";
		echo "<label for='tipo'>Tipo </label><select name='tipo' id='tipo'><br>";		
		foreach($result as $tipo) {
			$array = json_decode(json_encode($tipo), true);	
		echo "<option>".$array["tipo"]."</option>";}
		echo "<input type='submit' name='seleTipo'value='Selecionar Tipo'>";		
		echo "</select>";
		//echo"</form>";



		$result = $client->listaPoblaciones();
		echo "<h3>Elija una Poblacion</h3>";
		//echo "<form name='sel_poblacion' action='map.php' method='post'>";
		echo "<label for='poblacion'>Poblacion </label><select name='poblacion' id='poblacion'><br>";		
		foreach($result as $poblacion) {
			$array = json_decode(json_encode($poblacion), true);	
		echo "<option>".$array["poblacion"]."</option>";}
		echo "<input type='submit'  name='selePoblacion'value='Selecionar Población'>";
		
		
		echo "</select>";
		
	 	echo"</form>";
	 	








?>