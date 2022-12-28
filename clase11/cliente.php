<?php
require_once("lib/nusoap.php");

$client = new soapclient("http://localhost:8888/clase11/servidor.php?wsdl");

echo "<h3>Funciones en el servidor</h3>";
$functions = $client->__getFunctions();
foreach($functions as $function){
	echo "<p>$function</p>";
}
echo "<br/>";

echo "<h4>$functions[0]</h4>";
$result = $client->holaMundo();
echo "$result<br/>";

echo "<h4>$functions[1]</h4>";
$result = $client->suma(7, 3);
echo "$result<br/>";

echo "<h4>$functions[2]</h4>";
$result = $client->resta(7, 3);
echo "$result<br/>";


echo "<h4>$functions[3]</h4>";
$result = $client->listaPelis();
//var_dump($result);
echo "<table border='1'>";
echo "<tr>";
	echo"<th>Titulo</th>"; 
	echo"<th>Director</th>";
	echo "</tr>"; 
foreach($result as $peli) {
	$array = json_decode(json_encode($peli), true);
	
	echo "<tr>";
	echo "<td>".$array["titulo"]."</td>"; //echo "<td>".$peli[1]."</td>"; 
	// con la opcion array en el primer addComplexType sin el json_decode
	echo "<td>".$array["director"]."</td>"; 
	echo "</tr>";
}
echo "</table>";
?>