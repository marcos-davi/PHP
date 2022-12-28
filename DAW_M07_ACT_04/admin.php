<?php
require("basededados.php");
$bdd = conectar();


$consulta = "select USUARIO.apellido, USUARIO.dni,ASIGNATURA.nombre, NOTA.nota
from USUARIO inner join NOTA on USUARIO.dni=NOTA.alumno
inner join ASIGNATURA on ASIGNATURA.identificador=NOTA.asignatura
WHERE USUARIO.tipo_usuario = 1;";
$resultado = realizar_consulta($bdd, $consulta);

echo "<h1>Bienvenidos Administrador</h1>";

echo "<h3>Inserte los datos del nuevo usuario</h2>";

echo"<form method='post' action='nuevo_user.php'>
DNI: <input type='text' name ='dni'><br>
Apellido: <input type='text' name ='apellido'><br>
Tipo de usuario: <input type='text' name ='tipo_usuario'><br>
<input type='submit' name ='crear' value ='Crear'>
</form><br>";


echo "<h3>Inserte los datos de la nueva asignatura</h2>";
echo"<form method='post' action='nueva_asig.php'>
Asignatura: <input type='text' name ='nombre'><br>
<input type='submit' name ='crear' value ='Crear'><br>
</form><br>";


echo "<h3>Seleccione el alumno y inserte su nota</h2>";
echo"<form method='post' action='nueva_nota.php'>
Alumno: <select name ='dni'><br>";
while ($fila =obtener_resultados($resultado)) {
	extract($fila);
	echo"<option value='$alumno'>$dni</option>";
}
echo"</select><br>";
$consulta = "select USUARIO.apellido, USUARIO.dni, ASIGNATURA.nombre, NOTA.nota
from USUARIO inner join NOTA on USUARIO.dni=NOTA.alumno
inner join ASIGNATURA on ASIGNATURA.identificador=NOTA.asignatura
WHERE USUARIO.tipo_usuario = 1;";
$resultado = realizar_consulta($bdd, $consulta);

echo"Asignatura:<select name ='nombre_asignatura'><br>";
while ($fila =obtener_resultados($resultado)) {
	extract($fila);
	echo"<option value='$identificador'>$nombre</option>";
}
echo"</select><br>";
echo"Nota:<input type='text' name ='nota'><br>";

echo"<input type='submit' name ='crear' value ='Crear'>";
echo"</form><br>";

echo "<h3>Modificar datos</h2>";
echo"<form method='post' action='nueva_asig.php'>
alumno:<input type='text' name ='alumno'><br>
nota:<input type='text' name ='nota'><br>
<input type='submit' name ='crear' value ='Crear'>
</form><br>";

echo "<h3>Eliminar Usuarios y asgnaturas</h2>";
$consulta = "select USUARIO.apellido, USUARIO.dni, ASIGNATURA.nombre, NOTA.nota
from USUARIO inner join NOTA on USUARIO.dni=NOTA.alumno
inner join ASIGNATURA on ASIGNATURA.identificador=NOTA.asignatura
WHERE USUARIO.tipo_usuario = 1;";
$resultado = realizar_consulta($bdd, $consulta);
echo"<form method='post' action='eliminar.php'>
Alumno: <select name ='dni'><br>";
while ($fila =obtener_resultados($resultado)) {
	extract($fila);
	echo"<option value='$alumno'>$dni</option>";
}
echo"</select><br>";
$consulta = "select USUARIO.apellido, USUARIO.dni, ASIGNATURA.nombre, NOTA.nota
from USUARIO inner join NOTA on USUARIO.dni=NOTA.alumno
inner join ASIGNATURA on ASIGNATURA.identificador=NOTA.asignatura
WHERE USUARIO.tipo_usuario = 1;";
$resultado = realizar_consulta($bdd, $consulta);

echo"Asignatura:<select name ='nombre_asignatura'><br>";
while ($fila =obtener_resultados($resultado)) {
	extract($fila);
	echo"<option value='$identificador'>$nombre</option>";
}
echo"</select><br>";
echo"<input type='submit' name ='eliminar' value ='Eliminar'>";
echo"</form><br>";

echo "<h3>Visualizar notas</h2>";
$consulta = "select USUARIO.apellido, USUARIO.dni, ASIGNATURA.nombre, NOTA.nota
from USUARIO inner join NOTA on USUARIO.dni=NOTA.alumno
inner join ASIGNATURA on ASIGNATURA.identificador=NOTA.asignatura
WHERE USUARIO.tipo_usuario = 1;";
$resultado = realizar_consulta($bdd, $consulta);
echo"<form method='post' action='visualizarnotas.php'>
DNI Alumno: <input type='text' name ='dni'><br>";

echo"<input type='submit' name ='visualizar' value ='Visualizar'>";
echo"</select><br>";

echo"</form><br>";


echo"<br><form method='post' action='cerrarcon.php'>
<input type='submit' name ='crear' value ='Cerrar Conexión'>
</form><br>";


cerrar_conexion($bdd);

?>