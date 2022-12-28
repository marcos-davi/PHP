<?php
function calcula_factura($precio, $tasas, $propina){
    $total_tasas = $precio*($tasas/100);
    $total_propinas = $precio*($propina/100);
    $total_sin_propina = $precio + $total_tasas;
    $total_con_propina =   $total_sin_propina + $total_propinas;
    return array($total_sin_propina, $total_con_propina);   

}
?>