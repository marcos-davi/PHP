<?php
require_once("lib/nusoap.php");

$client = new soapclient("http://localhost:8888/nusoap/servidor.php?wsdl");

echo "<h3>Funciones en el servidor</h3>";
$functions = $client->__getFunctions();
foreach($functions as $function){
	echo "<p>$function</p>";
}
echo "<br/>";

echo "<h4>$functions[0]</h4>";
$result = $client->suma(7, 3);
echo "$result<br/>";

echo "<h4>$functions[1]</h4>";
$result = $client->resta(7, 3);
echo "$result<br/>";
?>