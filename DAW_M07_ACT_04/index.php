<?php
require("basededados.php");

$bdd = conectar();
$consulta = "select * from usuario;";
$resultado = realizar_consulta($bdd, $consulta);
$num_filas = obtener_num_filas($resultado);



echo " <form action='valida_usuario.php' method='post'>
                DNI: <input type='text' name='dni'><br>
                Apellido: <input type='text' name='apellido'><br>";

                echo"<input type='submit' value='Entrar'>
                         </form>";

echo"<br><form method='post' action='cerrarcon.php'>
<input type='submit' name ='crear' value ='Cerrar Conexión'>
</form><br>";



                       

                     





?>