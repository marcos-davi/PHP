<?php 
$numCliente=$_GET["numCliente"];
/*el servidor   
        retorne un JSON con el listado de nombres de clientes.*/

$clientes= array("Merce","Josefa","Mortadelo","Filemon");
$nombre_cliente= $clientes[$numCliente];

$info_cliente=array("nombre"=>$nombre_cliente);

//transformamos el info_cliente a nomenclatura JSON
$info_cliente= json_encode($info_cliente);
echo( $info_cliente);


