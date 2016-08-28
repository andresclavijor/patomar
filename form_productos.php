<?php
    include 'layout/menu_user.php';
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            Menu -<small> Productos</small>
                        </h3>
                    </div>
                </div>
                <!-- /.row -->
                <br>

                <!--row datos vendedor -->
                <div class="row">
                    <div class="col-sm-6 col-md-offset-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Producto</h3>
                            </div>
                            <div class="panel-body">
                                <form class="form" role="form" action="lib/lib_productos.php" method="POST">
                                    <p class="title">Ingresa datos producto</p>
                                    <div class="form-group">
                                        <label for="nombre" class="control-label ">Producto:</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" placeholder="nombre" name="nombre" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-beer"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                    <div class="form-group">
                                        <label for="descripcion" class="control-label ">Descripción:</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" placeholder="descripción" name="descripcion" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-list-alt"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="valor_unidad" class="control-label ">valor unidad:</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="number" placeholder="valor unidad" name="valor_unidad" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="existencias" class="control-label ">existencias:</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="number" min="0" max="1000000" placeholder="existencias" name="existencias" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-truck"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <br><br>
                                    <div class="col-lg-12">
                                        <div class="pull-right">
                                            <div class="form-group">
                                                <div class="options_crear" style="display: block">
                                                    <button class="btn btn-white" onclick="volver();">Cancelar</button>
                                                    <button class="btn btn-primary" type="submit" >Guardar Producto</button>
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

</body>

</html>