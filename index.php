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
                            Menu -<small> Facturación</small>
                        </h3>
                    </div>
                </div>
                <!-- /.row -->
                <br>
                <div class="row">
                    
                    <!-- item -->
                    <div class="col-lg-4 col-md-4 col-md-offset-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row" onClick="irLink(1);">
                                    <div class="col-xs-3">
                                        <i class="fa fa-barcode fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <h3>Factura</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-md-offset-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row" onClick="irLink(2);">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <h3>Inventario</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-md-offset-4">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row" onClick="irLink(3);">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">                                        
                                        <h3>Clientes</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: #bda9a9">
                                <div class="row" onClick="irLink(4);">
                                    <div class="col-xs-3">
                                        <i class="fa fa-male fa-5x"><i class="fa fa-female fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">                                        
                                        <h3>Vendedores</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.row -->

                <!--row datos vendedor -->
                <div class="row">
                    <div class="col-sm-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Mi datos</h3>
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
                                        <p> Primer Nombre :  <?php echo $data_user['p_nombre']; ?> </p>
                                        <p> Segundo Nombre : <?php echo $data_user['s_nombre'] ?></p>
                                        <p> Primer Apellido :<?php echo $data_user['p_apellido'] ?> </p>
                                        <p> Segundo Apellido :<?php echo $data_user['s_apellido'] ?></p>
                                        <p> Salario : <?php echo $data_user['salario'] ?></p>
                                        <p> Email : <?php echo $data_user['email'] ?></p>
                                        <p> Telefono : <?php echo $data_user['telefono'] ?></p>
                                        <p> Sexo : <?php echo $data_user['sexo'] ?></p>

                                    </div>
                                    <!-- <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

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
