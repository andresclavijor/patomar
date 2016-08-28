<?php
include 'db.class.php';

echo "si funciona";

	//$s_nombre = $_REQUEST['s_nombre'];

	$reg_facturas = array(
		'NRO_FACTURA' => "'". $_REQUEST['no_factura']."'",
		'FECHA_FACTURA' => "'". $_REQUEST['fecha']."'",
		'FECHA_ENTREGA' => "'". $_REQUEST['fecha_entrega']."'",
		'TIPO_ENVIO' => "'". $_REQUEST['tipo_envio']."'",
		'ID_CLIENTE'	   => $_REQUEST['id_cliente'],
		'ID_VENDEDOR'	   => $_REQUEST['id_vendedor']
	);

	var_dump($reg_facturas);

	//insercion en db
	$db = new database();
	$db->conectar();
	$res = $db->insert_record('facturas', $reg_facturas);
	
	if ($res) {
		# ok insert
		echo "ok insert factura";
	}else{
		echo "datos erroneos";
	}


?>			