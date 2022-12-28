<?php
// php que guarda la combinación de los inputs en la session
session_start();

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];
$num4 = $_POST["num4"];

if (isset($num1) && isset($num2) && isset($num3) && isset($num4) && is_numeric($num1) 
&& is_numeric($num2) && is_numeric($num3) && is_numeric($num4) 
&& $num1 >=0 && $num1 <=9 && $num2 >=0 && $num2 <=9 && $num3 >=0 && $num3 <=9
&& $num4 >=0 && $num4 <=9){
    
        $_SESSION["num1"]= $num1;
            $_SESSION["num2"]= $num2;
            $_SESSION["num3"]= $num3;
            $_SESSION["num4"]= $num4;
            $saved ="Combinación guardada ";           
           
   
}else{
    $saved ="Hay que ser un numero de 0 a 9";
            

}

echo $saved; 




