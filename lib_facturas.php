<<<<<<< HEAD:lib/lib_facturas.php
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


=======
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


>>>>>>> 337d081c70532cfbd8d6c966e0915d00afc37c23:lib_facturas.php
?>			