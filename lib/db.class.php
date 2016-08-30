<?php
/*
CLASE PARA LA CONEXION Y LA GESTION DE LA BASE DE DATOS Y LA PAGINA WEB
*/
class database {

  private $conexion;

    /* METODO PARA CONECTAR CON LA BASE DE DATOS*/
 public function conectar()
 {
  if(!isset($this->conexion))
  {
    $this->conexion = pg_connect("host=ec2-54-243-190-100.compute-1.amazonaws.com dbname=d9fgktgc712okm user=xqoujfuadocgkq password=V-CZglV1BKqO-J99ier0AP6URm");
    //mysqli_set_charset($this->conexion,'utf8');

    if (pg_last_error()) {
        echo "Error: No se pudo conectar a PostgreSQL." . pg_last_error();
        //echo "err.no de depuración: " . mysqli_connect_errno() . PHP_EOL;
        exit;
    }
  }
 }

  /* METODO PARA CERRAR LA CONEXION A LA BASE DE DATOS */
  public function disconnect()
  {
    // Liberando el conjunto de resultados
    //pg_free_result($result);

    // Cerrando la conexión
    pg_close($this->conexion);
  }

  /* METODO PARA REALIZAR UNA CONSULTA 
 INPUT:
 $sql | codigo sql para ejecutar la consulta
 OUTPUT: $result
 */
 public function consulta($sql)
 {
    $result = pg_query($sql);
    
    if(!$result){
     echo 'PostgreSQL Error: ' . pg_last_error();
     exit;
    }
    //echo "query".$sql;
    //print_r($result);
    return $result;
 }

  /*
  -- insertar registros
  */
   public function insert_record($tabla,$data,$returnid = null){
    $columns = implode(", ",array_keys($data));
    $values  = implode(", ",array_values($data));

    //print_r("Insert into sp_360_$tabla ($columns) values ($values)");

    $result = pg_query("Insert into $tabla ($columns) values ($values)");
    
    if(!$result){
      echo 'PostgreSQL Error: '. 'tbl:'. $tabla .'-' . pg_last_error();
      exit;
    }
      if ($returnid) {
        # retorne last_id
        $oid = pg_last_oid($result);
        return $oid;
      }else{
        return $result;
      }

   }

/*
 -- update registro
*/
 public function update_record($tabla,$data,$id)
 {
    $result = pg_query($this->conexion,"UPDATE $tabla SET $data WHERE id=$id");

    if (!$result) {
      # code...
      echo "PostgreSQL Error: ". pg_last_error();
      exit;
    }
    return $result;
 }

}
?>