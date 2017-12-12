<?php
ob_start();
session_start();

if (isset($_SESSION['s_user'])&& isset($_SESSION['s_reg'])) {
    $user_actual=$_SESSION['s_user'];
    $cod_user=$_SESSION['s_reg'];
}
else{
    header("location: index.php");
}

include_once('clsDetalle.php');
include_once('clsTipo.php');
include_once('clsDocumento.php');
include_once('clsFotos.php');
include_once('ClsUsuario.php');

if (isset($_GET['x_tittle'])) {
    echo "<script type='text/javascript'>window.location='#ver';</script>";
}

?>
<script src=""></script>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <!--<link rel="icon" type="image/png" href="assets/img/favicon.ico">-->
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Perfil de Usuario</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <!-- Bootstrap core CSS     -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/paper-kit.css?v=2.1.0" rel="stylesheet" />

        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="assets/css/demo.css" rel="stylesheet" />

        <!--     Fonts and icons     -->
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/nucleo-icons.css" rel="stylesheet">
        <script> 
        var miPopup 
        function abreSubirFotos(){ 
            miPopup = window.open("subirfotos.php","miwin","width=600,height=400,scrollbars=yes")
             miPopup.focus() 
        }   
        </script> 

    </head>

    <body>
        <nav class="navbar navbar-expand-md fixed-top">
            <div class="container">
                <div class="navbar-translate">
                    <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>
                    <a class="navbar-brand" href="">BIBLIOTECA | PERFIL</a>
                </div>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link"><i class="fa fa-home"></i>Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="upload.php" class="nav-link"><i class="fa fa-upload"></i>Archivos</a>
                        </li>
                        <li class="nav-item">
                            <a href="descargas.php" class="nav-link"><i class="fa fa-download"></i>Descargas</a>
                        </li>
                        <li class="nav-item">
                            <a href="perfil.php" class="nav-link">  <i class="fa fa-user"></i>Mi Perfil</a>
                        </li>
                        <li class="nav-item ">
                            <a href="logout.php" class="btn btn-outline-danger btn-round"><i class="nc-icon nc-user-run"></i> Salir  </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br><br>
        <?php
            $img=new Foto();
            $portada=$img->ObtenerPortada($cod_user);
            $foto=$img->ObtenerFoto($cod_user);
        ?>

        <?php

        $d = new Usuario();
        $d->setNroReg($cod_user);

        ?>
        <div class="wrapper">

            <div class="page-header page-header-xs" data-parallax="true" style="background-image: url('assets/img/portada/<?php if($portada==null){echo "default.jpg";} else echo $portada;?>');">
                <div class="filter"></div>
            </div>
            <div class="section profile-content">
                <div class="container">
                    <div class="owner">
                        <div class="avatar">
                            <?php 
                                if ($foto==null) {
                                    echo "<a href='' onClick='abreSubirFotos()'><img src='assets/img/faces/default.jpg' alt='Circle Image' class='img-circle img-no-padding img-responsive'></a>";
                                }
                                else
                                {
                                    echo "<a href='' onClick='abreSubirFotos()'><img src='assets/img/faces/".$foto."' alt='Circle Image' class='img-circle img-no-padding img-responsive'></a>";
                                }
                            ?>
                        </div>
                        <div class="name">
                            <h4 class="title">
                                <?php echo $user_actual;?><br /></h4>
                            <h6 class="description">E-Mail</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto text-center">
                            <p><?php echo $d->Info()->correo;?> </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto text-center">
                            <p><?php echo $d->Info()->fecha_nacimiento;?> </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto text-center">
                            <p><?php echo $d->Info()->direccion;?> </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto text-center">
                            <p><?php echo $d->Info()->telefono;?> </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto text-center">
                            <p><?php echo $d->Info()->sexo;?> </p>
                            <br />
                            <btn class="btn btn-outline-default btn-round"><i class="fa fa-cog"></i> Settings</btn>
                        </div>
                    </div>
                    <br id="ver">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="nav-tabs-navigation" >
                                <div class="nav-tabs-wrapper">
                                    <ul id="tabs" class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#materia" role="tab">Tus Documentos Subidos</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="my-tab-content" class="tab-content text-center">

                                <div class="tab-pane active" id="materia" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="tim-title">
                                                <h3>MODIFICACION</h3>
                                                <br/>
                                            </div>
                                            <form action="perfil.php" method="POST">
                                                <div class="form-group has-success">
                                                    <input type="hidden" class="form-control form-control-success" id="inputSuccess1" placeholder="TITULO" name="txt_up" value="<?php if($_GET['x_up']){echo $_GET['x_up'];}?>">

                                                    <input type="hidden" class="form-control form-control-success" id="inputSuccess1" placeholder="TITULO" name="txt_doc" value="<?php if($_GET['x_doc']){echo $_GET['x_doc'];}?>">

                                                    <input type="text" class="form-control form-control-success" id="inputSuccess1" placeholder="TITULO" name="txtTitulo" value="<?php if($_GET['x_tittle']){echo $_GET['x_tittle'];}?>">
                                                </div>
                                                <div class="form-group has-success">

                                                    <?php
                                                         $obj=new Tipo();
                                                         $reg=$obj->Buscar();
                                                         
                                                         echo "<select name='cboTipo' class='form-control'> />";
                                                         while ($fila=mysqli_fetch_array($reg))
                                                         {
                                                          ?>
                                                        <option <?php if($_GET[ 'x_tipo']==$fila[ 'id_tip']) echo "selected";?>
                                                            value="
                                                            <?php echo $fila['id_tip']; ?>">
                                                                <?php 
                                                          echo $fila['nombre_tipo'];  
                                                             echo "</option>";       
                                                          }
                                                          echo "</select>"; 
                                                          ?>

                                                </div>
                                                <div class="form-group has-success">
                                                    <textarea class="form-control" rows="4" placeholder="Descricion del documento" name="txtDesc"><?php if($_GET['x_desc']){echo $_GET['x_desc'];}?></textarea>
                                                </div><br/>
                                                <div class="form-group">
                                                    <input type=submit class="btn btn-outline-warning btn-round" value="Modificar" name="botones">

                                                    <input type=submit class="btn btn-outline-danger btn-round" value="Eliminar" name="botones">

                                                    <input type=submit class="btn btn-outline-default btn-round" value="Limpiar" name="botones">

                                                    <input type=submit class="btn btn-outline-info btn-round" value="Nuevo Documento" name="botones">


                                                </div><br/>
                                            </form>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="tim-title">
                                                <h3>Lista de tu Libros</h3>
                                                <br/>
                                            </div>
                                            <div>
                                                <table class="table table-striped">
                                                    <tr>
                                                        <td><b>Titulo</b></td>
                                                        <td><b>Fecha subida</b></td>
                                                        <td><b>Accion</b></td>
                                                    </tr>
                                                    <?php
                                                        $vista = new Detalle();
                                                        $dato=$vista->BuscarxUsuario($cod_user);
                                                        while ($fila=mysqli_fetch_object($dato)) {
                                                            echo "<tr>";
                                                                echo "<td>$fila->titulo</td>";
                                                                echo "<td>$fila->fecha_up</td>";
                                                                echo "<td><a href='perfil.php?x_tittle=$fila->titulo&x_desc=$fila->descripcion&x_tipo=$fila->id_tip_pk&x_up=$fila->id_up_pk&x_doc=$fila->id_arc_pk'><i class='nc-icon nc-send' aria-hidden='true'></i></a></td>";

                                                            echo "<tr>";
                                                        }
                                                    ?>
                                                </table>
                                            </div>
                                            <br/>
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
        include_once('html_footer.php');
    ?>

    <?php
    function Modificar(){
        if ($_POST['txtTitulo'] && $_POST['txtDesc']) {
            $nel = new Detalle();
            $nel->setIdUpload($_POST['txt_up']);
            $nel->setIdDocumento($_POST['txt_doc']);
            $nel->setTitulo($_POST['txtTitulo']);
            $nel->setTipo($_POST['cboTipo']);
            $nel->setDescripcion($_POST['txtDesc']);

          /*  echo "<br>".$nel->getIdUpload();
            echo "<br>".$nel->getIdDocumento();
            echo "<br>".$nel->getTitulo();
            echo "<br>".$nel->getTipo();
            echo "<br>".$nel->getDescripcion();*/

           if ($nel->Modificar())
           {
                echo "<script type='text/javascript'>alert('MODIFICADO CORRECTAMENTE');</script>";
            }
            else
                echo "<script type='text/javascript'>alert('ERROR, NO SE MODIFICO ');</script>";
        }
        else
            echo "<script type='text/javascript'>alert('INGRESE TODOS LOS CAMPOS');</script>";
    }

     function Eliminar(){

        if ($_POST['txt_up']&&$_POST['txt_doc']) {
            $new = new Detalle();
            $new->setIdUpload($_POST['txt_up']);
            $new->setIdDocumento($_POST['txt_doc']);

           if ($new->Eliminar()) {
                echo "<script type='text/javascript'>alert('ELIMINADO CORRECTAMENTE');</script>";
            }
            else
                echo "<script type='text/javascript'>alert('ERROR, NO SE ELIMINO ');</script>";
        }
        else
            echo "<script type='text/javascript'>alert('INGRESE TODOS LOS CAMPOS');</script>";
    }




    switch ($_POST['botones']) {
        case 'Modificar':
            Modificar();
            break;
        
        case 'Eliminar':
            Eliminar();
            break;

        case 'Nuevo Documento':
            header("location: upload.php");

            break;

        case 'Limpiar':
            echo "<script type='text/javascript'>window.location='#ver';</script>";
            break;
    }


    ?>
    </body>

    <!-- Core JS Files -->
    <script src="assets/js/jquery-3.2.1.js" type="text/javascript"></script>
    <script src="assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
    <script src="assets/js/popper.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!-- Switches -->
    <script src="assets/js/bootstrap-switch.min.js"></script>

    <!--  Plugins for Slider -->
    <script src="assets/js/nouislider.js"></script>

    <!--  Plugins for DateTimePicker -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <!--  Paper Kit Initialization and functons -->
    <script src="assets/js/paper-kit.js?v=2.1.0"></script>


    </html>
