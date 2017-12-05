<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>INICIO</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-kit.css?v=2.1.0" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />

</head>

<body>
    <?php
    include_once('clsSesion.php');
    ?>
    <nav class="navbar navbar-expand-md fixed-top navbar-transparent" color-on-scroll="500">
        <div class="container">

            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>
                <!--<img src="assets/img/logo_finor2.png"  alt="FINOR" width="50">-->
                <a class="navbar-brand" href="">Ingenieria de Sistemas</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href=""  class="nav-link"><i class="fa fa-home"></i>Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link"><i class="fa fa-upload"></i>Archivos</a>
                    </li>
                    <li class="nav-item">
                        <a href=""  class="nav-link"><i class="fa fa-download"></i>Descargas</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">  <i class="fa fa-user"></i>Mi Perfil</a>
                    </li>
                    <li class="nav-item">
                            <button type="button" class="btn btn-outline-danger btn-round" data-toggle="modal" data-target="#myModal">
                                Login
                            </button>
                       
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <div class="page-header section-dark" style="background-image: url('assets/img/antoine-barres.jpg')">
            <div class="filter"></div>
            <div class="moving-clouds" style="background-image: url('assets/img/clouds.png'); ">

            </div>
    		<div class="content-center">
    			<div class="container">
    				<div class="title-brand">
    					<h1 class="presentation-title">Bibliotec Virtual</h1>
    					<div class="fog-low">
    						<img src="assets/img/fog-low.png" alt="">
    					</div>
    					<div class="fog-low right">
    						<img src="assets/img/fog-low.png" alt="">
    					</div>
    				</div>

                        <!--    *******  FORMILARIO  *******     -->
                    <div class="row">
                        <form class="col-sm-12" action="" method="POST">
                            <div class="col-sm-12"> 
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Titulo de Documento">
                                    <br>
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                                            <font class="text-warning">Libros   |</font>
                                            <span class="form-check-sign"></span>   
                                        </label>
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            <font class="text-warning">Tesis |</font>
                                            <span class="form-check-sign"></span>
                                        </label>
                                    <input type="submit" class="btn btn-info btn-round col-4" value="Buscar" name="btnBuscar">
                                </div>
                            </div>
                        </form>
                    </div>
    			</div>
    		</div>
        <?php
        ?>

    	</div>
        <!---------- CUERPO  ---------->
        <div >
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                                <h6 class="modal-title text-center">
                                     Iniciar Sesion
                                </h6>
                             
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="indexx.php" method="POST">
                            <div class="modal-body">
                            
                                <div class="form-group"> 
                                    <div class="input-group">
                                        <input type="text" name="txtUser" class="form-control" placeholder="Nro Registro" aria-describedby="basic-addon1">
                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    </div>
                                    <br><br>
                                    <div class="input-group">
                                        <input type="password" name="txtPass" class="form-control" placeholder="Contraseña" aria-describedby="basic-addon2">
                                        <span class="input-group-addon" id="basic-addon2"><i class="fa fa-key" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="modal-footer">
                                <div class="left-side">
                                    <a href="registro.php" class="btn btn-default btn-link"  >Nueva Cuenta</a>
                                </div>
                                <div class="divider"></div>
                                <div class="right-side">
                                    <input type="submit" class="btn btn-danger btn-link" name="btnLog" Value="Acceder">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
        <?php

        if (isset($_POST['btnLog'])) {
            $new= new Session();
            $new->setUsuario($_POST['txtUser']);
            $new->setPassword($_POST['txtPass']);
            $admin=$new->VerificarAdmin();
            if (mysqli_num_rows($admin)!=0) {

                $d_admin=mysqli_fetch_object($admin);
                $_SESSION['s_user']=$d_admin->user;
                $_SESSION['s_admin']=true;

                echo "<script type='text/javascript'>alert('User Admin: ".$_SESSION['s_user']."');</script>";
            }
            else
            {
                $user=$new->VerificarUser();
                if (mysqli_num_rows($user)!=0) {

                    $d_user=mysqli_fetch_object($user);
                    $_SESSION['s_reg']=$d_user->nro_reg;
                    $_SESSION['s_user']=$d_user->nombres." ".$d_user->paterno;


                    echo "<script type='text/javascript'>alert('Usuario: ".$_SESSION['s_user']."');</script>";
                }
                else
                    echo "<script type='text/javascript'>alert('No Existe ningun registro');</script>";

            }

        }

        ?>
        
        <div class="main" style="border: 1px solid red">
            <div class="section section-buttons">
                <div class="container">
                    
                   
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
