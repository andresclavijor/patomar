<?php
include 'db.class.php';
include 'view.php';

	$oid_fac   = $_REQUEST['id_fac'];
	$sel_prod =	$_REQUEST['sel_prod'];
	$val_prod = $_REQUEST['val_prod'];
	//$s_nombre = $_REQUEST['s_nombre'];

	//obtener id 
	$res_fac = obtener_id_fac($oid_fac);
	
	if ($dato_fac = pg_fetch_array($res_fac, null, PGSQL_ASSOC)) {
		# code...
		$id_fac = $dato_fac['id_factura'];
	}

	$db = new database();
	$db->conectar();
	
	$cont = 0;
	foreach ($val_prod as $valor) {
		//mostrar solo valores > 0
		if ($valor>0) {
			$reg_det = array('id_producto' => $sel_prod[$cont] , 'id_factura'=> $id_fac , 'cantidad'=>$valor );
			//var_dump($reg_det);
			$res = $db->insert_record('detalle_factura', $reg_det);

				if ($res) {
					# ok insert
					echo "ok actualizado inventario <br>";
					//deducir del inventario la cantidad del producto
					update_inventario($sel_prod[$cont],$valor);
				}else{
					echo "datos erroneos";
				}
		}
    	$cont++;
	}


	//insercion en db
	/*
	//echo "res".$res;
	*/

?>			