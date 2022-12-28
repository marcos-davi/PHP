<?php
// 1.5 - DAW_M07_ACT_02_Marcos_Davi_Carvalho_dos_Santos
$dni = $_POST["dni"];
$calcDNI = $dni%23;
$letra = ["T","R", "W","A","G", "M", "Y",  "F",  "P",  "D",  "X",  "B",  "N", "J",  "Z",  "S",  "Q",  "V",  "H",  "L", "C","K", "E"];

echo "$dni $letra[$calcDNI]";


?>
