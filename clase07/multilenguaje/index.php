<?php
if(isset($_POST["lang"])){
	require($_POST["lang"].".php");
}else{
	require("es.php");
}
?>

<table border="1">
<tr>
<td><?php echo $lang["menu_inicio"]?></td>
<td><?php echo $lang["menu_articulos"]?></td>
<td><?php echo $lang["menu_contacto"]?></td>
<td>
	<form method="POST">
		<select name="lang" >
			<option value="es">Español</option>
			<option value="en">English</option>
		</select><br>
		<input type="submit" name="Enviar" >
	</form>

</td>

</tr>

</table>

