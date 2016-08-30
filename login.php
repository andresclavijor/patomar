<?php
require_once "db.class.php";

	$email = $_POST['username'];
            $db = new database();
            $db->conectar();
                # Select user
                $res = $db->consulta("SELECT * FROM vendedores WHERE email='$email'; ");
                $db->disconnect();
                if($row = pg_fetch_array($res, null, PGSQL_ASSOC) ){
                	session_start();
	                    $_SESSION['id_user'] = $row['id_vendedor'];
                        $_SESSION['nombre'] = $row['p_nombre'].' '.$row['p_apellido'];
                        $_SESSION['correo'] = $row['email'];
                        //echo "ok datos";
                        header('Location: ../index.php');
                } else 
                {
                	//echo "datos erroneos";
                	header('Location: ../login_users.php?i=1');
                }

?>