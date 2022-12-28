<?php
    session_start();
    include "includes/header.html";
    include "includes/formulario.html";
    if(isset( $_SESSION['error empty'])){
        echo $_SESSION['error empty'];
        unset($_SESSION['error empty']);
    }
    if(isset($_SESSION['error_input_type'])){
        echo $_SESSION['error_input_type'];
        unset($_SESSION['error_input_type']);
    }
?>
