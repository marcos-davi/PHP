<?php
// FUNCIONES ISSET, EMPTY, IS_NULL
//ISSET: variable declarada y valor diferente de null
//EMPTY: variable vacia
//IS_NULL: variable igual a null

$variable = 0;
echo "ISSET: ". isset($variable)."<br>";
echo "EMPTY: ". empty($variable)."<br>";
echo "IS_NULL: ". is_null($variable)."<br>";

function suma($a, $b){
	$res = $a+$b;
	return $res;
}
$resultado = suma(3,4);
	echo "El resultado de la sumas es $resultado<br>";
	

	function suma2($a, $b=10){
		global $res;
		$res = $a + $b;
	}
	suma2(6,9);
	echo "El resultado de la sumas es $res<br>";
	$variable = 10;

	function imprimir_variable(){
		echo"El valor de la variable es: ".$GLOBALS['variable']."<br>";
	}

	imprimir_variable();

	function mi_funcion(){
		static $num = 0; 
		echo "$num<br>";
		$num++;
	}
	mi_funcion();
	mi_funcion();
	mi_funcion();

?>