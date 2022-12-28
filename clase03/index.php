<?php
session_start();
//include y require
include_once("form.html");
if (isset($_SESSION['error1'])) {
	echo $_SESSION['error1'];
	unset($_SESSION['error1']);
}
if (isset($_SESSION['error2'])) {
	echo $_SESSION['error2'];
	unset($_SESSION['error2']);
}
if (isset($_SESSION['error3'])) {
	echo $_SESSION['error3'];
	unset($_SESSION['error3']);
}
if (isset($_SESSION['error4'])) {
	echo $_SESSION['error4'];
	unset($_SESSION['error4']);
}
if (isset($_SESSION['error5'])) {
	echo $_SESSION['error5'];
	unset($_SESSION['error5']);
}

?>