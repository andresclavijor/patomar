<?php
    include 'layout/menu_user.php';
    include 'lib/view.php';

    $id_fac = $_REQUEST['oid'];
    echo "id:".$id_fac;
?>
    <style type="text/css">
        input{
            width: 100%;
        }
        h5{
            margin-top: 2px;
            margin-bottom: 2px;
        }
    </style>

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
                    <div class="col-md-8 col-md-offset-2">
                        <h4>Facturacion : <small>Paso 2</small> </h4>
                        <br>
                        <p>Seleccion de productos</p>

                    </div>
                </div>

                <!--row datos vendedor -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Productos</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <!-- lista de productos -->
                                    <form class="form" role="form" action="lib/lib_detalle_fac.php" method="POST">
                                        <input type="hidden" name="id_fac" value="<?php echo $id_fac ?>" />
                                    <div class="productos col-md-12">
                                        <?php
                                            //listado productos solo con existencia >0
                                            $lisProd = seleccionarProductos();

                                            while ($datoProd = pg_fetch_array($lisProd, null, PGSQL_ASSOC)) {
                                                # recorrer productos
                                                echo '<div class="col-md-3 col-sm-4">
                                                        <div class="ibox">
                                                            <div class="ibox-content">
                                                                <h5>'.$datoProd['nombre'].'</h5>
                                                                <div class="m-t-sm small">disponible :<small> '.$datoProd['existencias'].' </small> </div>
                                                                <h5>$ '.$datoProd['vr_unidad'].'</h5>
                                                                <input type="hidden" name="sel_prod[]" value="'.$datoProd['id_producto'].'">
                                                                <div class="form-group"> 
                                                                <input type="number" name="val_prod[]" min="0" max="'.$datoProd['existencias'].'" value="0" /> </div>
                                                            </div>
                                                        </div>
                                                    </div>';
                                            }
                                        ?>
                                        <div class="col-sm-4">
                                            <button class="btn btn-primary" type="submit">Guardar</button>
                                        </div>
                                        <br>
                                    </div>
                                    </form>
                                    <!-- /.lista de productos -->

                                </div>
                                <!-- /.row -->
                                <!-- %%%%%%%%%% end form -->
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


    </script>
    

</body>

</html>