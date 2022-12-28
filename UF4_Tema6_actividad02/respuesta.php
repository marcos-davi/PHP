<?php 
/*el servidor   
        retorne un JSON con el listado de nombres de clientes.*/

$clientes= array("Merce","Josefa","Mortadelo","Filemon");

//transformamos el array clientes a nomenclatura JSON
$clientesJSON= json_encode($clientes);
echo( $clientesJSON);


