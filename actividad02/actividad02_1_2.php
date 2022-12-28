<?php
//1.2 - DAW_M07_ACT_02_Marcos_Davi_Carvalho_dos_Santos

$val1 = $_POST["val1"];
$val2 = $_POST["val2"];
$operacion = $_POST["operacion"];



switch ($operacion) {
    case "sumar":
        $result = sumar($val1, $val2);
        echo "La suma de " . $val1 . " + " . $val2 . " es igual a " . $result;
        break;

    case "restar":
        $result = restar($val1, $val2);
        echo "La subtración de " . $val1 . " - " . $val2 . " es igual a " . $result;
        break;

    case "multiplicar":
        $result = multiplicar($val1, $val2);
        echo "La multiplicación de " . $val1 . " * " . $val2 . " es igual a " . $result;
        break;

    case "dividir":
        $result = dividir($val1, $val2);
        echo "La división de " . $val1 . " / " . $val2 . " es igual a " . sprintf("%.2f", $result);
        break;
}

function sumar($param1, $param2)
{
    $result = $param1 + $param2;
    return $result;
}
function restar($param1, $param2)
{
    $result = $param1 - $param2;
    return $result;
}

function multiplicar($param1, $param2)
{
    $result = $param1 * $param2;
    return $result;
}
function dividir($param1, $param2)
{
    $result = $param1 / $param2;
    return $result;
}
