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
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Vendedor</h3>
                            </div>
                            <div class="panel-body">
                                <form class="form" role="form" action="lib/lib_vendedores.php" method="POST">
                                    <p class="title">Ingresa datos Vendedor</p>
                               
                                    <div class="form-group">
                                        <label for="nombre" class="control-label ">Primer Nombre:</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" placeholder="Obligatorio" name="p_nombre" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                    <div class="form-group">
                                        <label for="descripcion" class="control-label ">Segundo Nombre:</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" placeholder="Opcional" name="s_nombre" class="form-control">
                                                <span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="form-group">
                                        <label for="valor_unidad" class="control-label ">Primer Apellido:</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" placeholder="Obligatorio" name="p_apellido" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="form-group">
                                        <label for="existencias" class="control-label ">Segundo Apellido:</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" placeholder="Opcional" name="s_apellido" class="form-control">
                                                <span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                    <div class="form-group">
                                        <label for="existencias" class="control-label ">Salario:</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="number" min="700000" max="10000000" placeholder="Salario $$$" name="salario" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                    <div class="form-group">
                                        <label for="existencias" class="control-label ">Correo Electronico:</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" placeholder="Opcional" name="email" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-beer"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                    <div class="form-group">
                                        <label for="existencias" class="control-label ">Telefono:</label>
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" placeholder="Celular - Fijo" name="telefono" class="form-control" required>
                                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                    <div class="form-group">
                                        <label for="existencias" class="control-label " required>Genero:</label>
                                        <div class="col-sm-12">
                                        
                                        
                                                
                                            <SELECT NAME="genero" SIZE="1"> 
                                                <OPTION VALUE="">seleccione</OPTION>
                                                <OPTION VALUE="M">Hombre</OPTION>
                                                <OPTION VALUE="F">Mujer</OPTION>
                                            </SELECT> 
                                            
                                            
                                        </div>
                                    </div>
                                    
                                    <br><br>
                                    <div class="col-lg-12">
                                        <div class="pull-right">
                                            <div class="form-group">
                                                <div class="options_crear" style="display: block">
                                                    <button class="btn btn-white" onclick="volver();">Cancelar</button>
                                                    <button class="btn btn-primary" type="submit" >Guardar Vendedor</button>
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