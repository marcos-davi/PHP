<?php 
/*el servidor ha de comparar el valor introducido dentro del input con el almacenado en la variable de sesion y indicar si son
iguales, o el valor enviado es inferior o superior.*/
session_start();
$aleatorio= intval( $_SESSION["numero"]);
$numeroUsuario=intval ($_POST["numero"]);

if($aleatorio==$numeroUsuario){
        echo '{"info":"iguales"}';
}
if($aleatorio>$numeroUsuario){
        echo '{"info":"numero generado es mayor"}';
}
if($aleatorio<$numeroUsuario){
        echo '{"info":"numero generado es menor"}';
}



