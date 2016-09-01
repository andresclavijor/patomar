<?php

include 'db.class.php';

//echo "si funciona";

	//$p_nombre = $_REQUEST['p_nombre'];
	//$s_nombre = $_REQUEST['s_nombre'];

	$reg_vend = array(
		'P_NOMBRE' => "'". $_REQUEST['p_nombre']."'",
		'S_NOMBRE' => "'". $_REQUEST['s_nombre']."'",
		'P_APELLIDO' => "'". $_REQUEST['p_apellido']."'",
		'S_APELLIDO' => "'". $_REQUEST['s_apellido']."'",
		'SALARIO' => $_REQUEST['salario'],
		'EMAIL' => "'". $_REQUEST['email']."'",
		'TELEFONO' => "'". $_REQUEST['telefono']."'",
		'SEXO' => "'". $_REQUEST['genero']."'"
	);

	var_dump($reg_vend);

	//
	$db = new database();
	$db->conectar();
	$res = $db->insert_record('vendedores', $reg_vend);
	
	if ($res) {
		# insert ok
		echo "Vendedor creado.";
		header('Location: http://patomarbadc.herokuapp.com/index.php');
	}


?>
