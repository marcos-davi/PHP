<?php

session_start();


$respuesta= '{"num1":"'.$_SESSION["num1"].'", "num2":"'.$_SESSION["num2"]
    .'", "num3":"'.$_SESSION["num3"].'", "num4":"'.$_SESSION["num4"].'"}';

    $resp = array("num1"=>$_SESSION["num1"], "num2"=>$_SESSION["num2"], 
    "num3"=>$_SESSION["num3"], "num4"=>$_SESSION["num4"]) ;
     $resp_texto = json_encode($resp);
echo $resp_texto;



