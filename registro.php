<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href=" assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Registro Usuarios</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href=" assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href=" assets/css/paper-kit.css?v=2.1.0" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href=" assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href=" assets/css/nucleo-icons.css" rel="stylesheet">

</head>
<body>
<?php
    include_once('clsUsuario.php');
?>
    <nav class="navbar navbar-expand-md fixed-top navbar-transparent" color-on-scroll="50">
        <div class="container">
            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>
                <a class="navbar-brand" href="https://www.creative-tim.com">Ingenieria de Sistemas</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.php"  class="nav-link"><i class="fa fa-home"></i>Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="upload.php" class="nav-link"><i class="fa fa-upload"></i>Archivos</a>
                    </li>
                    <li class="nav-item">
                        <a href="descargas.php"  class="nav-link"><i class="fa fa-download"></i>Descargas</a>
                    </li>
                    <li class="nav-item">
                        <a href="perfil.php" class="nav-link">  <i class="fa fa-user"></i>Mi Perfil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <div class="page-header" style="background-image: url('assets/img/login-image.jpg');">
            <div class="filter"></div>
                <div class="container">
                    <br><br>
                    <div class="row">
                        <div class="col-lg-6 ml-auto mr-auto">
                            <div class="card card-register">
                                <h2 class="title">Nuevo Usuario</h2>

                                <form class="register-form" action="registro.php" method="POST">
                                    <label>Nro Registro</label>
                                    <input type="text" class="form-control" name="txt_reg" value="" placeholder="Nro registro">

                                    <label>Nombre:</label>
                                    <input type="text" class="form-control" name="txt_nom" value="" placeholder="Nombres">

                                    <label>Paterno:</label>
                                    <input type="text" class="form-control" name="txt_pat" value="" placeholder="Apellido Paternos">

                                    <label>Materno:</label>
                                    <input type="text" class="form-control" name="txt_mat" value="" placeholder="Apellido Paternos">

                                    <label>Sexo:</label>
                                    <select name="cbo_sexo" class="selectpicker form-control">
                                        <option  value="Masculino">Masculino</option>
                                        <option  value="Femenino">Femenino</option>
                                    </select>

                                    <label>Correo Electronico:</label>
                                    <input type="mail" class="form-control" name="txt_ema" value="" placeholder="Apellido Paternos">

                                    <label>Password</label>
                                    <input type="password" class="form-control" name="txt_pas1" value="" placeholder="Password">

                                    <label>Confirmar Password</label>
                                    <input type="password" class="form-control" name="txt_pas2" value="" placeholder="Password">

                                    <input type="submit" class="btn btn-danger btn-block btn-round" name="btnRegistrar" value="REGISTRARSE">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
<?php
    if (isset($_POST['btnRegistrar']) && $_POST['txt_pas1']==$_POST['txt_pas2']) {
        $new=new Usuario();
        $new->setNroReg($_POST['txt_reg']);
        $new->setNombres($_POST['txt_nom']);
        $new->setPaterno($_POST['txt_pat']);
        $new->setMaterno($_POST['txt_mat']);
        $new->setSexo($_POST['cbo_sexo']);
        $new->setCorreo($_POST['txt_ema']);
        $new->setPass($_POST['txt_pas1']);
/*
        echo "<br>".$new->getNroReg();
        echo "<br>".$new->getNombres();
        echo "<br>".$new->getPaterno();
        echo "<br>".$new->getMaterno();
        echo "<br>".$new->getSexo();
        echo "<br>".$new->getCorreo();
        echo "<br>".$new->getPass();
*/


        if ($new->GuardarNuevo()) {
            echo "<script type='text/javascript'>alert('Registro Exitoso!');</script>";
        }
        else
            echo "<script type='text/javascript'>alert('Error, ingrese correctamente todos los campos!!');</script>";
    }
?>


</body>

<!-- Core JS Files -->
<script src="assets/js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="assets/js/tether.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Paper Kit Initialization snd functons -->
<script src="../assets/js/paper-kit.js?v=2.0.1"></script>

</html>
