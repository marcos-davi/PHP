<?php 
$numero1 = $_POST["n1"];
$aleatorio = (rand(1,100));

$resul=$numero1+$aleatorio;
//Tipo de archivo a retornar:
@header("Content-type: text/xml");
$xml='<?xml version="1.0" encoding="utf-8"?>';
$xml.='<respuesta>';
$xml.='<resul>'.$resul.'</resul>';
$xml.='</respuesta>';
echo $xml;
