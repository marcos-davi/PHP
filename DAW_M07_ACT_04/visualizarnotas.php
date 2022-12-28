<?php

require("basededados.php");

$dni =$_POST['dni'];
$bdd = conectar();
$consulta = "select apellido, dni, nombre, nota from USUARIO
left JOIN NOTA ON USUARIO.dni=NOTA.alumno
LEFT JOIN ASIGNATURA ON ASIGNATURA.identificador=NOTA.asignatura
WHERE USUARIO.dni = '$dni';";

$resultado = realizar_consulta($bdd, $consulta);
$num_filas = obtener_num_filas($resultado);

echo "<table border='1'><tr><td>Apellido</td><td>DNI</td><td>Asignatura</td><td>Nota</td></tr>";
while($fila = obtener_resultados($resultado)){
                    extract($fila);
                    echo "
                    <tr>
                    <td>$apellido</td>
                    <td>$dni</td>
                    <td>$nombre</td>
                    <td>$nota</td>
                    </tr>";

                }
                echo "<tr></tr>
                    </table><br>";



echo"<br><form method='post' action='cerrarcon.php'>
<input type='submit' name ='crear' value ='Cerrar Conexión'>
</form><br>";

cerrar_conexion($bdd);
?>