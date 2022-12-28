<?php
$nombre1 = $_GET["nombre1"];
$nombre2 =$_GET["nombre2"];
@header("Content-type:text/xml");
echo '<?xml version="1.0" encoding="utf-8" ?>';
echo "<info>";
echo "<nombre>".$nombre1."</nombre>";
echo "<nombre>$nombre2</nombre>";
echo "</info>";