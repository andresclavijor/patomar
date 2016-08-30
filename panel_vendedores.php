<?php
    include 'layout/menu_user.php';
    include 'lib/view.php'
?>


<div id="page-wrapper">

    <div class="container-fluid">
        <!-- message insert ok -->
        <?php
            $var = $_REQUEST['return'];
            if ($var == "clie-reg") {
                echo '<div class="row" >
                        <div class="alert alert-success" role="alert">Vendedor Creada.</div>
                    </div>';
            }
        ?>

        

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Gestión de Vendedores
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- row-edicion -->
        <br>
        <div class="row">
                <div class="panel-edicion col-lg-10 col-sm-12">
                    <div id="sect-buscar" class="search-user col-lg-6 col-sm-6 col-xs-12" ></div>

                    <div class="options-users col-lg-6 col-sm-6 col-xs-12" style="text-align:right;">
                        <div class="visible-xs-block"><br></div>
                        
                        <div class="btn-group">
                            <a class="btn btn-danger" href="form_vendedores.php" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Publicar Encuesta">
                                <i class="fa fa-plus"></i> Nuevo</a>
                        </div>
                    </div>
                </div>
        </div>
        <!-- /.row edicion -->

        </hr>
        </br>
        <input type="hidden" id="sel_id" value=""></input>

        <div class="row">
            <div class="col-lg-10">
                <div class="table-responsive">
                    <table id="tabla" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>  </th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Salario</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Sexo</th>
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
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
        <script type="text/javascript">

        function selectUsers(ele){
            var id_sel  = $("#sel_id").val();
            var sel_new = $(ele).data("id");

            if ( id_sel == sel_new) {
                //si selecciono el mismo
                if ($(ele).find("i").hasClass('fa-circle-o')){
                    //select user . obtener id,
                    $("#sel_id").val($(ele).data("id"));
                    //-verificar si se puede varios select
                    $(ele).find("i").removeClass("fa-circle-o");
                    $(ele).find("i").addClass("fa-check-circle");
                    $(ele).css("background-color","#7ECCBC");
                }else{
                    $("#sel_id").val("");
                    $(ele).find("i").removeClass("fa-check-circle");
                    $(ele).find("i").addClass("fa-circle-o");
                    $(ele).css("background-color","#f9f9f9");
                }
            }else{
                //alert("new sel"+sel_new);
                if (id_sel>=1) {
                    //descativar el anterior
                    $("#fila_"+id_sel).find("i").removeClass("fa-check-circle");
                    $("#fila_"+id_sel).find("i").addClass("fa-circle-o");
                    $("#fila_"+id_sel).css("background-color","#f9f9f9");
                };

                //select new user . obtener id,
                $("#sel_id").val($(ele).data("id"));
                //-verificar si se puede varios select
                $(ele).find("i").removeClass("fa-circle-o");
                $(ele).find("i").addClass("fa-check-circle");
                $(ele).css("background-color","#7ECCBC");

            }
        }



    </script>
</body>

</html>

