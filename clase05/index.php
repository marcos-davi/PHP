<?php
require("persona.php");
$personas = array();
$personas[0] = new Persona("Ana", "Ortiz", 25);
$personas[1] = new Persona("Estefanía", "González", 22);
$personas[2] = new Persona("Pau", "Pons", 24);

//unset($personas[2]);

$personas[0]->set_edad(29);
$personas[1]::set_profesion("Team Leader");


foreach ($personas as $persona) {
	echo $persona;
}

//$per = $personas[2]->get_constante();
//echo "<br>". $per. "<br>";
?>