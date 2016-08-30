<?php
include 'db.class.php';


	//$s_nombre = $_REQUEST['s_nombre'];

	$reg_facturas = array(
		'NRO_FACTURA' => "'". $_REQUEST['no_factura']."'",
		'FECHA_FACTURA' => "'". $_REQUEST['fecha']."'",
		'FECHA_ENTREGA' => "'". $_REQUEST['fecha_entrega']."'",
		'TIPO_ENVIO' => "'". $_REQUEST['tipo_envio']."'",
		'ID_CLIENTE'	   => $_REQUEST['id_cliente'],
		'ID_VENDEDOR'	   => $_REQUEST['id_vendedor']
	);

	//var_dump($reg_facturas);

	//insercion en db
	$db = new database();
	$db->conectar();
	$res = $db->insert_record('facturas', $reg_facturas,true);
	
	//echo "res".$res;
	
	if ($res) {
		# ok insert
		//echo "ok insert factura : n.". $res;
		header('Location: ../detalle_fac.php?oid='.$res);
	}else{
		echo "datos erroneos";
	}


?>			