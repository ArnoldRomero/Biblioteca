<?php
ob_start();
include_once('clsCarro.php');
session_start();
?>
<?php
include_once('clsUpload.php');
include_once('clsDetalle.php');
include_once('clsUsuario.php');
include_once('clsDocumento.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>EDITAR</title>

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
            <div class="main" >
                <div class="row">
                    <div class="section section-notifications" id="notifications">
                        <div class="container">
                            <div class="tim-title">
                                <h3>Notification</h3>
                            </div>
                        </div>


                        <div class="alert alert-info">
                            <div class="container">
                                <span>Mensaje de editar </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        /**********PIE DE PAGINA***********/
        include_once('html_footer.php');
    ?>

<?php
if (isset($_POST['btnSubir'])&&$_SESSION['carrito']->getDim()>0) 
{
    //Esto Biene de la Sesion Usuario
    $id_usuario='0213164442';
    $exito=0;

    $obj= new Upload();
    $obj->setFecha(Hoy());
    $obj->setIdUsuario($id_usuario);
    $obj->setCantidad($_SESSION['carrito']->getDim());
    $obj->Guardar();
    $cod_upload=$obj->ultimo_codigo();


    for($k=1;$k<=$_SESSION["carrito"]->getDim();$k++){
        $djr=new Documento();
        $djr->setSize($_SESSION['carrito']->getTamaño($k-1));
        $djr->setFormato($_SESSION['carrito']->getFormato($k-1));
        $djr->setNombre($_SESSION['carrito']->getNombre($k-1));
        $djr->Guardar();
        $id_document=$djr->ultimo_codigo();
/*  
        echo "<br>".$djr->getSize();
        echo "<br>".$djr->getFormato();
        echo "<br>".$djr->getNombre();
        echo "<br>".$djr->ultimo_codigo();
*/
        $det = new Detalle();
        $det->setIdUpload($cod_upload);
        $det->setIdDocumento($id_document);
        $det->setDescripcion($_SESSION["carrito"]->getDescripcion($k-1));
        $det->setTitulo($_SESSION["carrito"]->getTitulo($k-1));
        $det->setTipo($_SESSION['carrito']->getTipo($k-1));
        if ($det->Guardar()) { 
            $exito++;
        }
    }     
    Nuevo();
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
