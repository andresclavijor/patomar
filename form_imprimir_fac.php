<?php
    include 'layout/menu_user.php';
    include 'lib/view.php';
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            Informacion -<small> Factura</small>
                        </h3>
                    </div>
                </div>
                <!-- /.row -->
                <br>
                <div class="row">
                 
                <!-- /.row -->

                <!--row datos vendedor -->
                <div class="row">
                    <div class="col-sm-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Datos Factura</h3>
                            </div>
                            <div class="panel-body">
                                <div class="">
                                    <div class="">
                                        <?php
                                            $res_row = datosUser($_SESSION['id_user']);
                                                if ( $data_user = pg_fetch_array($res_row, null, PGSQL_ASSOC) ) {
                                                    //echo "ok data";
                                                }
                                        ?>
                                        <p> No. Factura :  <?php echo $data_user['p_nombre']; ?> </p>
                                        <p> Fecha Factura : <?php echo $data_user['s_nombre'] ?></p>
                                        <p> Tipo Envio :<?php echo $data_user['p_apellido'] ?> </p>
                                        <p> Cliente :<?php echo $data_user['s_apellido'] ?></p>
                                        <p> Vendedor : <?php echo $data_user['salario'] ?></p>
                                    </div>
                                    <!-- <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
				
				 <div class="row">
            <div class="col-lg-10">
                <div class="table-responsive">
                    <table id="tabla" class="table table-hover table-striped"> 
                        <thead>
                            <tr>
                                <th>  </th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Cantidad</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $res_row = listaVendedores();
                            while ( $row = pg_fetch_array($res_row, null, PGSQL_ASSOC) ) {
                                echo " 
                                <tr>
                                    <td><i class='fa fa-circle-o'></i></td>
                                    <td class='td_name'>".$row["p_nombre"]." ".$row["s_nombre"]."</td>
                                    <td class='td_name'>".$row["p_apellido"]." ".$row["s_apellido"]."</td>
                                    <td> ".$row['salario']." </td>
                                    <td> ".$row['email']." </td>
                                    <td> ".$row['telefono']." </td>
                                    <td> ".$row['sexo']." </td>
                                </tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->             

    </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script type="text/javascript">

        function irLink(opcion)
        {
            var link ="";
            switch(opcion)
            {
                case 1:
                    link = "facturacion.php";
                break;
                case 2:
                    link = "panel_inventario.php";
                break;
                case 3:
                    link = "panel_clientes.php";
                break;
                case 4:
                    link = "panel_vendedores.php";
                break;
            }
            window.location.href = link;
        }

    </script>
    

</body>

</html>