<?php
require_once("lib/nusoap.php");
$client = new soapclient('http://localhost:8888/provaSoap/servidor.php?wsdl');

$result = $client->holaMundo();
echo "<pre>";
print_r($result);
echo "</pre>";

$result = $client->holaMundo2("Marcos");
echo "<pre>";
print_r($result);
echo "</pre>";

$result = $client->suma(6,9);
echo "<pre>";
print_r($result);
echo "</pre>";


?>