<html>
	<body>
		<?php
		echo "<h1>Hola Mundo!</h1>";
		
		/*
		comentario
		de varias lineas
		*/

		//Variables
		$miVariable = 10;
		$miVariable = "Hola";
		$miVariable = 9.5;
		$nombre = "Dani";
		echo "Hola $nombre"."<br>";

		//Operaciones
		$num1 = 3242;
		$num2 = 54;
		$division = $num1/$num2;
		echo " El resultado de dividir $num1 entre $num2 es $division"."<br>";
		$division = sprintf("%.2f", $division);
		echo " El resultado redondeado es $division"."<br>";

		//Constantes
		define("TAM", 5);

		//Ejemplo PHp + HTML (Bucles);
		$n = 1;
		echo"<table border='1'>";
		for($i=0;$i<TAM;$i++){
			echo"<tr>";
			for($j=0;$j<TAM;$j++){
				echo"<td>$n</td>";
				$n++;
			}
			echo "</tr>";
		}
		echo "</table>";

		//ARRAY
		$miArray = array();
		$miArray[0] = 10;
		$miArray[1] = 20;
		$miArray[2] = 30;

		$miArray2 = array(1, 2, 3, 4, 5);

		$miArray3 = array("clave1" => 1, "clave2" => 2, "clave3" => 3);
		echo "$miArray3[clave1]"."<br>";
		$miArray4 = [1, 2, 3, 4, 5];
		echo "$miArray4[1]"."<br>";
		foreach ($miArray3 as $clave => $valor) {
			echo"$clave => valor<br>";
		}
		phpinfo();

		?>
	</body>
</html>