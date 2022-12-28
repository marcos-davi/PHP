<?php
session_start();
if(empty($_POST['nombre'])){
    $_SESSION['error1']= "Debes introducir tu nombre <br>";
}

if(empty($_POST['apellido'])){
    $_SESSION['error2']= "Debes introducir tu apellido <br>";
}

if(empty($_POST['edad'])){
    $_SESSION['error3']= "Debes introducir tu edad <br>";
}

if(empty($_POST['sexo'])){
    $_SESSION['error4']= "Debes introducir tu sexo <br>";
}
if(empty($_POST['aficiones'])){
    $_SESSION['error5']= "Debes introducir tu aficion <br>";
}
if (isset($_SESSION['error1'])||isset($_SESSION['error2'])||
    isset($_SESSION['error3'])|| isset($_SESSION['error4'])||
    isset($_SESSION['error5'])) {
    header("Location: index.php");
}
else{
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];
$aficiones = $_POST["aficiones"];

    echo "Bienvenido $nombre $apellido. Segun tu edad eres un $edad. <br/>
      Tu sexo es $sexo y tus aficiones son:<br>";
      foreach($aficiones as $aficion){
          echo" -$aficion <br>";
      }
      }  


?>

