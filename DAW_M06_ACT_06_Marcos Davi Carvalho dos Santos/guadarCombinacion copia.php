<?php
session_start();

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];
$num4 = $_POST["num4"];

$nums= array($num1, $num2, $num3, $num4);

foreach ($nums as $ses){
   
}
   if(isset($ses)){
       if(is_numeric($ses)){
           if($ses >=0 and $ses <= 9){
            $_SESSION["num1"]= $num1;
            $_SESSION["num2"]= $num2;
            $_SESSION["num3"]= $num3;
            $_SESSION["num4"]= $num4;
            $saved ="Combinación guardada ";
            echo $saved; 
            

           }
       }
   }else{
       $no_saved = "Hay que ser un numero de 0 a 9";
       echo $no_saved;
   }







/*
$respuesta= '{"num1":"'.$num1.'", "num2":"'.$num2
    .'", "num3":"'.$num3.'", "num4":"'.$num4.'"}';

    $resp = array("num1"=>$num1, "num2"=>$num2, 
    "num3"=>$num3, "num4"=>$num4) ;
     $resp_texto = json_encode($resp);
echo $resp_texto;
*/





