<?php
session_start();
require"utils/functions.php";

$precio_menu = $_GET["precio"];
if(empty($precio_menu)){
    //echo "Introduce el precio del menu";
    //header("Refresh: 2; url=".$_SERVER["HTTP_REFERER"]);
    $_SESSION['error empty'] = "Introduce el precio del menu";
    header("Location: ". $_SERVER['HTTP_REFERER']);
}elseif(!filter_var($precio_menu, FILTER_VALIDATE_FLOAT)){
    //echo"Introduce un precio válido";
    //header("Refresh: 2; url=".$_SERVER["HTTP_REFERER"]);
    $_SESSION['error_input_type']= "Introduce un precio válido";
    header("Location: ". $_SERVER['HTTP_REFERER']);
}else{
    $totales= calcula_factura($precio_menu, 21, 10);
    echo "Precio sin propina: $totales[0]<br>";
    echo "Precio con propina: $totales[1]";

}
?>