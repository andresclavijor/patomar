<?php
	require_once "db.class.php";
	//Controller - View ,  consultas

	function listaClientes()
	{
		$db = new database();
		$db->conectar();
		$result = $db->consulta("SELECT * FROM clientes");
		$db->disconnect();
		return $result;	
	}

	function listaProductos()
	{
		$db = new database();
		$db->conectar();
		$result = $db->consulta("SELECT * FROM productos");
		$db->disconnect();
		return $result;	
	}

	function listaVendedores()
	{
		$db = new database();
		$db->conectar();
		$result = $db->consulta("SELECT * FROM vendedores");
		$db->disconnect();
		return $result;	
	}

	function datosUser($id)
	{
		$db = new database();
		$db->conectar();
		$result = $db->consulta("SELECT * FROM vendedores WHERE id_vendedor=$id");
		$db->disconnect();
		return $result;	
	}

?>