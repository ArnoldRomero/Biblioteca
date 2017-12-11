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
?>
<?php
include_once('clsDetalle.php');
include_once('clsUsuario.php');
include_once('clsDocumento.php');
include_once('clsDownload.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Downloads</title>

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
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
</head>

<body>
    <?php
        function Hoy(){
            $hoy=getdate();
                if ($hoy['mday']<10) {
                    $dia="0".$hoy['mday'];
                    $hoydia=$hoy['year']."-".$hoy['mon']."-".$dia;
                }
                else
                {
                    $hoydia=$hoy['year']."-".$hoy['mon']."-".$hoy['mday'];
                }
            return $hoydia;
        }

        $diahoy=Hoy();
    ?>
        <nav class="navbar navbar-expand-md fixed-top bg-dark">
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

        <div class="wrapper">
            <div class="main" style="min-height: 550px;">
                <div class="row">
                    <div class="section section-notifications" id="notifications">
                        <form action="descargas.php" method="POST">
                            <div class="container">
                                <div class="tim-title row" class="bg bg-dark">

                                    <div class="col-sm-3">
                                        <label>Lista de Descargas de:</label>
                                        <input type="date" class="form-control" width="20" name="txtFecha1" value="<?php echo Hoy();?>">
                                    </div>
                                    <div class="col-sm-3">
                                        <label>hasta: </label>
                                        <input type="date" class="form-control " name="txtFecha2" value="">
                                    </div>
                                    <div class="col-sm-3">
                                        <br><br>
                                        <label>
                                            <input type="checkbox" name="check" value="on"  data-toggle="switch">
                                        </label>
                                    </div>
                                    <div class="col-sm-3">
                                        <br>
                                        <input type="submit" class="btn btn-outline-success btn-round col-12" name="btnSearch" value="Buscar" value="">
                                    </div>
                                </div>

                                    <?php
                                        if (isset($_POST['btnSearch'])) {

                                            $fe=new Download();

                                            if ($_POST['check']!="on") {
                                                $dato=$fe->BuscarHoy($cod_user,$_POST['txtFecha1']);
                                                Mostrar($dato);
                                                //echo $cod_user." ".$_POST['txtFecha1'];
                                            }
                                            else{
                                                $dato=$fe->BuscarEntreFecha($cod_user,$_POST['txtFecha1'],$_POST['txtFecha2']); 
                                                Mostrar($dato);
                                                //echo $cod_user." ".$_POST['txtFecha1']." ".$_POST['txtFecha2'];
                                            } 
                                        }
                                        else{
                                            $fa = new Download();
                                            $dato=$fa->BuscarHoy($cod_user,$diahoy);
                                            Mostrar($dato);
                                        }
                                        
                                        function Mostrar($dato)
                                        {
                                            if (mysqli_num_rows($dato)==0) 
                                            {
                                            echo "<div class='alert alert-info col-13 row'>
                                                    <div class='container'>
                                                        <span>No Tienes Ningun Archivo descargado para la Fecha</span>
                                                    </div>
                                                </div>";
                                            }
                                            else{
                                    ?>
                                <table class="table table-striped"   align="center">
                                    <?php
                                                while ($fila=mysqli_fetch_object($dato)) 
                                                {
                                                    $tam=$fila->size/1024;
                                                    $t=intval($tam)." KB";
                                    ?>
                                    <tr>
                                        <td width="20">
                                            <img src="assets/img/logo.png" class="" alt="Rounded Image" height="90">
                                        </td>
                                        <td>
                                            <b><label>TITULO: </label></b>  
                                            <label><?php echo $fila->titulo;?></label><br> 
                                            <label><?php echo $fila->descripcion; ?></label>    
                                        </td>
 
                                        <td>
                                            <b><label>Formato: </label></b>  
                                            <label>PDF</label><br> 
                                            <label>Tamaño: </label>
                                            <b><label><?php echo $t; ?></label></b>
                                        </td>
                                        <td>  
                                            <label>Fecha de Descarga: </label><br> 
                                            <b><?php echo $fila->fecha_down; ?></b><br>
                                        </td>
                                    </tr>
                                    <?php
                                                }
                                            }
                                        }
                                    ?>


                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php
        /**********PIE DE PAGINA***********/
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
