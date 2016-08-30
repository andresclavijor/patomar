<?php
    include 'layout/menu_user.php';
    include 'lib/view.php';
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
                        <h4>Facturacion : <small>Paso 1</small> </h4>
                        <br>
                        <p>Información basica</p>

                    </div>
                </div>

                <!--row datos vendedor -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Factura</h3>
                            </div>
                            <div class="panel-body">
                                <form class="form" role="form" action="lib/lib_facturas.php" method="POST">
                                    <p class="title">Ingresa datos de factura</p>
                              
                                    <div class="form-group">
                                        <label for="no_factura" class="control-label ">Nº. factura:</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="number" placeholder="no factura" name="no_factura" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                    <div class="form-group">
                                        <label for="fecha" class="control-label ">Fecha factura:</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="date" placeholder="fecha factura" name="fecha" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="form-group">
                                        <label for="fecha_entrega" class="control-label ">Fecha entrega factura:</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="date" placeholder="fecha entrega" name="fecha_entrega" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="form-group">
                                        <label for="tipo_envio" class="control-label ">Tipo envio:</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" placeholder="tipo envio" name="tipo_envio" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-truck"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="form-group">
                                        <label for="id_cliente" class="control-label ">Cliente:</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <select name="id_cliente" class="form-control" required>
                                                    <option value="">Seleccione</option>
                                                <?php   
                                                    $resLista = seleccionClientes();
                                                    while ($datoClie = pg_fetch_array($resLista, null, PGSQL_ASSOC)) {
                                                        echo "<option value='".$datoClie['id_cliente']."'> ".$datoClie['nombre'] ."</option>";
                                                    }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="form-group">
                                        <label for="id_vendedor" class="control-label ">Vendedor:</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="hidden" value="<?php echo $_SESSION['id_user'] ?>" name="id_vendedor">
                                                <input type="text" value="<?php echo $_SESSION['nombre'] ?>" disabled/>
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <br><br>
                                    <div class="col-lg-12">
                                        <div class="pull-right">
                                            <div class="form-group">
                                                <div class="options_crear" style="display: block">
                                                    <button class="btn btn-white" type="button" onclick="volver();">Cancelar</button>
                                                    <button class="btn btn-primary" type="submit" >Guardar Factura</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
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