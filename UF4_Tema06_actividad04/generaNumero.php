<?php 
session_start();

//  pida al servidor que genere un número aleatorio entre 1 y 100 y lo almacene en una variable de sesion.

$aleatorio = (rand(1,100));
$_SESSION["numero"]=$aleatorio;

//retorno el numero para depurar y ver si funciona
echo '{"info":"numero generado:'.$aleatorio.'"}';



