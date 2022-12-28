<?php
//php que comprueba si la conbinación es la misma anteriormente guardada

session_start();

$numChk1 = $_POST["numChk1"];
$numChk2 = $_POST["numChk2"];
$numChk3 = $_POST["numChk3"];
$numChk4 = $_POST["numChk4"];

if($numChk1 == $_SESSION["num1"] && $numChk2 == $_SESSION["num2"] && $numChk2 == $_SESSION["num2"] && 
$numChk4 == $_SESSION["num4"]){
    $respuesta = "Combinación correcta!";
}else{
    $respuesta = "Combinación incorrecta";
}

echo $respuesta;



