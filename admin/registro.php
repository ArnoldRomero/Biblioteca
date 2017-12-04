<!doctype html>
<html lang="en">

<head>
    <?php
        /*----------Fragmento de HEAD -----------*/
        $titulo="Formulario";
        include_once('head.php');
    ?>

</head>

<body>
    <?php
        include_once('clsMateria.php');
        include_once('clsTipo.php');
        /*----------Fragmento de NAVEGACION -----------*/
        include_once('navigation.php');
    ?>
        <div class="wrapper">

            <div class="main" style="border: 1px solid red">
                <div class="section section-buttons">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <ul id="tabs" class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#materia" role="tab">Materias</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#tipo" role="tab">Tipo de Documento</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="my-tab-content" class="tab-content text-center">


                                    <div class="tab-pane active" id="materia" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="tim-title">
                                                    <h3>Registro de Nueva Materia</h3>
                                                    <br/>
                                                </div>
                                                <form action="registro.php" method="POST">
                                                    <div class="form-group has-success">
                                                        <input type="text" <?php if($_GET['x_idm']){echo "readonly='false'";}?> class="form-control form-control-success" id="inputSuccess1" placeholder="Sigla de Materia" name="txt_id1" value="<?php if($_GET['x_idm']){echo $_GET['x_idm'];}?>">
                                                    </div><br/>
                                                    <div class="form-group has-success">
                                                        <input type="text" class="form-control form-control-success" id="inputSuccess1" placeholder="Materia" name="txt_nombre1" value="<?php if($_GET['x_nombrem']){echo $_GET['x_nombrem'];}?>">
                                                    </div><br/>
                                                    <div class="form-group">
                                                        <input type=submit class="btn btn-outline-success btn-round" value="Guardar" name="botones">
                                                        <input type=submit class="btn btn-outline-warning btn-round" value="Modificar" name="botones">
                                                        <input type=submit class="btn btn-outline-info btn-round" value="Nuevo" name="botones">
                                                        <input type=submit class="btn btn-outline-danger btn-round" value="Eliminar" name="botones">
                                                    </div><br/>
                                                </form>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="tim-title">
                                                    <h3>Lista de Materias Registradas </h3>
                                                    <br/>
                                                </div>
                                                <div>
                                                    <table class="table table-striped">
                                                        <tr>
                                                            <td><b>Sigla</b></td>
                                                            <td><b>Materia</b></td>
                                                            <td><b>Acciones</b></td>
                                                        </tr>
                                                        <?php
                                                        $vista = new Materia();
                                                        $dato=$vista->Buscar();
                                                        while ($fila=mysqli_fetch_object($dato)) {
                                                            echo "<tr>";
                                                                echo "<td>$fila->sigla</td>";
                                                                echo "<td>$fila->nombre_m</td>";
                                                                echo "<td><a href='registro.php?x_idm=$fila->sigla&x_nombrem=$fila->nombre_m'><i class='nc-icon nc-send' aria-hidden='true'></i></a></td>";

                                                            echo "<tr>";
                                                        }
                                                        ?>
                                                        
                                                    </table>
                                                </div>
                                                <br/>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="tab-pane" id="tipo" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="tim-title">
                                                    <h3>Nuevo Tipo de Documento</h3>
                                                    <br/>
                                                </div>
                                                <form action="registro.php" method="POST">


                                                    <div class="form-group has-success">
                                                        <input type="text" readonly="false" class="form-control form-control-success" id="inputSuccess1" placeholder="Id Autogenerado" name="txt_id2" value="<?php if($_GET['x_idt']){echo $_GET['x_idt'];}?>">
                                                    </div><br/>
                                                    <div class="form-group has-success">
                                                        <input type="text" class="form-control form-control-success" id="inputSuccess1" placeholder="Tipo de Documento" name="txt_nombre2" value="<?php if($_GET['x_nombret']){echo $_GET['x_nombret'];}?>">
                                                    </div><br/>


                                                    <div class="form-group">
                                                        <input type=submit class="btn btn-outline-success btn-round" value="Guardar" name="btn">
                                                        <input type=submit class="btn btn-outline-warning btn-round" value="Modificar" name="btn">
                                                        <input type=submit class="btn btn-outline-info btn-round" value="Nuevo" name="btn">
                                                        <input type=submit class="btn btn-outline-danger btn-round" value="Eliminar" name="btn">
                                                    </div><br/>
                                                </form>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="tim-title">
                                                    <h3>Lista de Tipos de Documento</h3>
                                                    <br/>
                                                </div>
                                                <div>
                                                    <table class="table table-striped">
                                                        <tr>
                                                            <td><b>ID</b></td>
                                                            <td><b>Tipo Doc</b></td>
                                                            <td><b>Acciones</b></td>
                                                        </tr>
                                                        <?php
                                                        $vis = new Tipo();
                                                        $dt=$vis->Buscar();
                                                        while ($fila=mysqli_fetch_object($dt)) {
                                                            echo "<tr>";
                                                                echo "<td>$fila->id_tip</td>";
                                                                echo "<td>$fila->nombre_tipo</td>";
                                                                echo "<td><a href='registro.php?x_idt=$fila->id_tip&x_nombret=$fila->nombre_tipo'><i class='nc-icon nc-send' aria-hidden='true'></i></a></td>";

                                                            echo "<tr>";
                                                        }
                                                        ?>
                                                        
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        /**********PIE DE PAGINA***********/
        include_once('footer.php');
    ?>
            <?php
        /********** FUNCIONES DE MATERIA Y TIPO ***********/
        include_once('funciones_Materia.php');
        include_once('funciones_Tipo.php');


        switch($_POST['botones'])
        {
            case "Nuevo":{
            }break;

            case "Guardar":{
            Guardar_Materia();
            }break;

            case "Modificar":{
            Modificar_Materia();
            }break;

            case "Eliminar":{
            Eliminar_Materia();
            }break;

            case "Buscar":{
            Buscar_Materia();
            }break;
        }
        switch($_POST['btn'])
        {
            case "Nuevo":{
            }break;

            case "Guardar":{
            Guardar_Tipo();
            }break;

            case "Modificar":{
            Modificar_Tipo();
            }break;

            case "Eliminar":{
            Eliminar_Tipo();
            }break;

            case "Buscar":{
            Buscar_Tipo();
            }break;

        }
    ?>

</body>
<?
    /********** ENLACES JAVASCRIPTS ***********/
    include_once('scriptJS.php');
?>

</html>
