<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
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
    <div class="wrapper">
        <div class="page-header page-header-xs" data-parallax="true" style="background-image: url('assets/img/fabio-mangione.jpg');">
            <div class="filter"></div>
        </div>
        <div class="section profile-content">
            <div class="container">
                <div class="owner">
                    <div class="avatar">
                        <img src="assets/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                    </div>
                    <div class="name">
                        <h4 class="title">Jane Faker<br /></h4>
                        <h6 class="description">Music Producer</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                        <p>An artist of considerable range, Jane Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                        <br />
                        <btn class="btn btn-outline-default btn-round"><i class="fa fa-cog"></i> Settings</btn>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                                <div class="nav-tabs-navigation">
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
                                                        <input type="text" <?php if($_GET['x_idm']){echo "readonly='false'";}?> class="form-control form-control-success" id="inputSuccess1" placeholder="Sigla de Materia" name="txt_id1" value="<?php if($_GET['x_idm']){echo $_GET['x_idm'];}?>">
                                                    </div><br/>
                                                    <div class="form-group has-success">
                                                        <input type="text" class="form-control form-control-success" id="inputSuccess1" placeholder="Materia" name="txt_nombre1" value="<?php if($_GET['x_nombrem']){echo $_GET['x_nombrem'];}?>">
                                                    </div><br/>
                                                    <div class="form-group">
                                                        <input type=submit class="btn btn-outline-warning btn-round" value="Modificar" name="botones">
                                                        
                                                        <input type=submit class="btn btn-outline-danger btn-round" value="Eliminar" name="botones">

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
                                                            <td><b>Sigla</b></td>
                                                            <td><b>Materia</b></td>
                                                            <td><b>Acciones</b></td>
                                                        </tr>
                                                        <?php/*
                                                        $vista = new Materia();
                                                        $dato=$vista->Buscar();
                                                        while ($fila=mysqli_fetch_object($dato)) {
                                                            echo "<tr>";
                                                                echo "<td>$fila->sigla</td>";
                                                                echo "<td>$fila->nombre_m</td>";
                                                                echo "<td><a href='registro.php?x_idm=$fila->sigla&x_nombrem=$fila->nombre_m'><i class='nc-icon nc-send' aria-hidden='true'></i></a></td>";

                                                            echo "<tr>";
                                                        }
                                                       */ ?>
                                                        
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
