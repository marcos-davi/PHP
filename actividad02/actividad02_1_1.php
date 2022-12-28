<?php
// 1.1 - DAW_M07_ACT_02_Marcos_Davi_Carvalho_dos_Santos

$notas = ["David" => 9, "Sandra" => 3, "Sonia" => 7.2];

$notaAlta = max($notas);
$notaBaja = min($notas);
$sumaNotas = 1;


foreach ($notas as $key => $valor) {

    if ($valor == $notaAlta) {
        $notaAlta = $valor;
    }
    if ($valor == $notaBaja) {
        $notaBaja = $valor;
    }
    
    $sumaNotas += $valor;
    $mediaNotas = $sumaNotas / count($notas);
}
echo "La nota más alta es la de " . $key . " con un " . $notaAlta . "<br>";
echo "La nota más baja es la de " . $key . " con un " . $notaBaja . "<br>";
echo "La media de la clase es " . $mediaNotas . "<br>";
asort($notas);
foreach ($notas as $key => $valor) {
    echo $key . " => " . $valor . "<br>";
}
