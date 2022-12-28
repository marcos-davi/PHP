<?php
require("database.php");

$con = conectar();

$consulta = "select id_pelicula, titulo, nombre, sinopsis from pelicula, director where director=id_director";
$resultado = realizar_consulta($con, $consulta);
$num_filas = obtener_num_filas($resultado);

if($num_filas == 0){
    echo"No se encuentram películas<br>";
}else{
    echo "<table border='1'>
            <form method='post' action ='borrarpelis.php'>
            <tr><td>TITULO</td><td>DIRECTOR</td><td>SINOPSIS</td><td>MODIFICAR</td><td>BORRAR</td></tr>";
             while($fila = obtener_resultados($resultado)){
                extract($fila);
                echo"<tr><td>$titulo</td>
                         <td>$nombre</td>
                         <td>$sinopsis</td>
                         <td><a href='modificarpeli.php?id=$id_pelicula'>Modificar</a></td>
                         <td><input type='checkbox' name='borrar[]' value ='$id_pelicula'></td>
                         </tr>";
             }
            echo "<tr><td colspan='5' style='text-align:right'><input type='submit' value='Borrar'</td></tr>
                </form></table>";
        }
        echo "<br>";
        // FORMULÁRO DE PELÍCULAS
        $consulta="select *from director";
        $resultado = realizar_consulta($con, $consulta);
        echo " <form action='nuevapeli.php' method='post'>
            Título: <input type='text' name='titulo'><br>
            Director: <select name='director'><br>";
            while($fila = obtener_resultados($resultado)){
                extract($fila);
                echo "<option value ='$id_director'>$nombre</option>";
            }
            echo "</select><br>
                     Sinopsis: <input type='text' name='sinopsis'><br>
                     <input type='submit'  value='Crear'>
                     </form>";
        
       cerrar_conexion($con);
?>