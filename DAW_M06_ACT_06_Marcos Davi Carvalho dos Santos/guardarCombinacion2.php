<?php
//phpque comprueba que el valor de cada input está o no vacio, que tenga un dígito, que sea positivo y que se realmente un numero.

$pos = $_POST['pos'];
$nums = $_POST['nums'];



if (isset($nums) && is_numeric($nums) && $nums >=0 && $nums <=9
   ){
    
            $respuesta ="Correcto";           
           
   
}else{
    $respuesta ="Incorrecto";
            

}

echo $respuesta; 




