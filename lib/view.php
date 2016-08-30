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

	//funcion para logueo y session
	function datosUser($id)
	{
		$db = new database();
		$db->conectar();
		$result = $db->consulta("SELECT * FROM vendedores WHERE id_vendedor=$id");
		$db->disconnect();
		return $result;	
	}

	function seleccionClientes()
	{
		$db = new database();
		$db->conectar();
		$result = $db->consulta("SELECT * FROM clientes order by nombre");
		$db->disconnect();
		return $result;
	}

	function seleccionarProductos()
	{
		$db = new database();
		$db->conectar();
		$result = $db->consulta("SELECT * FROM productos where existencias != 0");
		$db->disconnect();
		return $result;
	}

	//obtener ID_fac de factira con el OID
	function obtener_id_fac($OID)
	{
		$db = new database();
		$db->conectar();
		$result = $db->consulta("SELECT id_factura FROM public.facturas where oid =$OID");
		$db->disconnect();
		return $result;
	}


	//update existencias del producto
	function update_inventario($id_prod,$cant)
	{
		$db = new database();
		$db->conectar();
			//obtener existencia actual
			$dato_exi = $db->consulta("SELECT existencias FROM public.productos where id_producto =$id_prod");
			if ($cant_exi = pg_fetch_array($dato_exi, null, PGSQL_ASSOC)) {
				$cantidad= $cant_exi['existencias'] - $cant;
				$result = $db->consulta("UPDATE public.productos SET existencias=$cantidad WHERE id_producto = $id_prod ");
			}
		//$db->disconnect();
	}


?>