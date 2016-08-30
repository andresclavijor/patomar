<?php	
include 'db.class.php';

	//$s_nombre = $_REQUEST['s_nombre'];

	$reg_productos = array(
		'NOMBRE' => "'". $_REQUEST['nombre']."'",
		'DESCRIPCION' => "'". $_REQUEST['descripcion']."'",
		'VR_UNIDAD' 	   => $_REQUEST['valor_unidad'],
		'EXISTENCIAS'	   => $_REQUEST['existencias']
	);

	//var_dump($reg_productos);

	//insert db
	$db = new database();
	$db->conectar();
	$res = $db->insert_record('productos', $reg_productos);
	
	if ($res) {
		# ok insert
		echo "<hr> Producto creado";
	}
	$db->disconnect();


?>			