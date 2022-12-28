<?php

//php que comprueba que el valor de cada input está guardado en session
session_start();

$pos = $_POST['pos'];
$nums = $_POST['nums'];

$int = intval($pos)-1;

$resp = array("1"=>$_SESSION["num1"],"2"=>$_SESSION["num2"], 
"3"=>$_SESSION["num3"], "4"=>$_SESSION["num4"]) ;


if (isset($resp[$pos])){
    if($nums == $resp[$pos]){
        $respuesta = "Correcto";
    }else{
        $respuesta = "Incorrecta";
    }

   
    
}else{
    $respuesta = "Incorrecta";
 

}

echo $respuesta;



