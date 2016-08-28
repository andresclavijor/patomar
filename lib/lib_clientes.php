
<?php
include 'db.class.php';

	$reg_cliente = array(
		'NOMBRE' => "'". $_REQUEST['nombre']."'",
		'DIRECCION' => "'". $_REQUEST['direccion']."'",
		'CIUDAD' => "'". $_REQUEST['ciudad']."'",
		'PAIS' => "'". $_REQUEST['pais']."'",
		'CONTACTO' => "'". $_REQUEST['contacto']."'",
		'TELEFONO' => "'". $_REQUEST['telefono']."'",
		'EMAIL' => "'". $_REQUEST['email']."'"
	);


	//inser DB
	$db = new database();
	$db->conectar();
	$res = $db->insert_record('clientes', $reg_cliente);
	if ($res) {
		# inser ok
		echo "<hr> cliente Creado";
		header("Location: ../panel_clientes.php?return=clie-reg");
	}

?>