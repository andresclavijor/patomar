<?php
    include 'layout/menu_user.php';
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            Menu -<small> Clientes</small>
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
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Cliente</h3>
                            </div>
                            <div class="panel-body">
                                <form class="form" role="form" action="lib/lib_clientes.php" method="POST">
                                    <p class="title">Ingresar Datos Cliente</p>
                                    
                                    <label for="nombre" class="control-label">Nombre</label>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" placeholder="nombre" name="nombre" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-hand-o-right"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <label for="direccion" class="control-label">Direccion</label>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" placeholder="direccion" name="direccion" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-info-circle"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <label for="ciudad" class="control-label">Ciudad</label>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" placeholder="ciudad" name="ciudad" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <label for="pais" class="control-label">Pais</label>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" placeholder="pais" name="pais" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <label for="contacto" class="control-label">Contacto</label>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" placeholder="contacto" name="contacto" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-book"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <label for="telefono" class="control-label">Telefono</label>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" placeholder="telefono" name="telefono" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                    <label for="email" class="control-label">Email</label>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" placeholder="email" name="email" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-inbox"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <br><br>
                                    <div class="col-lg-12">
                                        <div class="pull-right">
                                            <div class="form-group">
                                                <div class="options_crear" style="display: block">
                                                    <button class="btn btn-white" type="button" onclick="volver();">Cancelar</button>
                                                    <button class="btn btn-primary" type="submit" >Guardar Cliente</button>
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