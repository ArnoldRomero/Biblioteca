<?php
    ob_start();
    include_once('clsCarro.php');
    session_start();

    if (isset($_SESSION['s_admin'])) {
        header("location: admin/index.php");
    }
    if (isset($_SESSION['s_user'])&& isset($_SESSION['s_reg'])) {
        $user_actual=$_SESSION['s_user'];
        $registro_user=$_SESSION['s_reg'];
    }
    else
        header("Location: index.php");

?>

<?php
    include_once('clsUpload.php');
    include_once('clsDetalle.php');
    include_once('clsUsuario.php');
    include_once('clsDocumento.php');
?>

<?php
if(!isset($_SESSION["carrito"]))
    {
      $_SESSION["carrito"]=new Carrito();
    }

if($_POST['Nuevo'])
{
    Nuevo();
}

function Nuevo(){

    $_SESSION["carrito"]=new Carrito();
}
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

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>UPLOAD</title>

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
    <script> 
        var miPopup 
        function abreArchivo(){ 
            miPopup = window.open("archivo.php","miwin","width=600,height=400,scrollbars=yes")
             miPopup.focus() 
        } 
    </script>
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
        <br>
        <br>
        <br>
        <div class="wrapper">

            <div class="main" >
                <div class="section section-buttons">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">Portal de Subidas de Archivos</h2>
                            <hr>
                            </div>
                            <div class="col-md-8 ml-auto mr-auto text-center">
                                <a href="" onClick="abreArchivo()" class="btn btn-info btn-round" >
                                <i class="nc-icon nc-cloud-upload-94" aria-hidden="true"></i> Agregar un Archivo
                            </a>
                            </div>
                            <?php
                                if($_GET['pelim']&&$_GET['x_ruta'])
                                    {
                                        $rufile=$_GET['x_ruta'];
                                        echo "$rufile";
                                        unlink($rufile);
                                        $_SESSION["carrito"]->Eliminar($_GET['pelim']-1);
                                        header("Location: upload.php");
                                    }
                            ?>

                            <div class="col-12 row" style="">
        
                                <table class="table table-striped"   align="center">

                                    <?php
                                    if($_SESSION["carrito"]->getDim()>0)
                                    {
                                        $total=0;

                                        for($k=1;$k<=$_SESSION["carrito"]->getDim();$k++)
                                        {
                                            $indice=$k;
                                            $title=$_SESSION["carrito"]->getTitulo($k-1);
                                            $des=$_SESSION["carrito"]->getDescripcion($k-1);
                                            $tipox=$_SESSION['carrito']->getTipo($k-1);
                                            $nom=$_SESSION['carrito']->getNombre($k-1);
                                            $tam=intval($_SESSION['carrito']->getTamaño($k-1)/(1024))." KB";
                                            $forma=$_SESSION['carrito']->getFormato($k-1);
                                            $dest=$_SESSION['carrito']->getDestino($k-1);

                                            $total=$_SESSION['carrito']->getDim();

                                    ?>
                                    <tr>
                                        <td><img src="assets/img/file.png" class="" alt="Rounded Image" height="90"></td>
                                        <td>
                                            <b><label>Archivo: </label></b>  
                                            <label><?php echo $nom;?></label><br>
                                            <b><label>Formato: </label></b>  
                                            <label><?php echo $forma;?></label><br>
                                            <b><label>Tamaño: </label></b>    
                                            <label><?php echo $tam;?></label><br>
                                        </td>
                                        <td>
                                            <b><label>Titulo: </label></b>   
                                            <label><?php echo $title;?></label><br>
                                            <b><label>Tipo: </label></b> 
                                            <label><?php echo $tipox;?></label><br>
                                            <b><label>Descripcion: </label></b>   
                                            <label><?php echo $des;?></label><br>
                                        </td>
                                        <td>
                                            <?php
                                            echo "<a href='upload.php?pelim=$k&x_ruta=$dest' class='btn btn-info btn-round' > Quitar </a>";
                                            ?>
                                        </td>

                                    </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </table>
                            </div>
                             <?php
                                if($_SESSION["carrito"]->getDim()==0)
                                    {
                                        ?>
                                        <div class="alert alert-info col-12 row">
                                            <div class="container">
                                                <span>No tienes ningun Archivo en la Bandeja!</span>
                                            </div>
                                        </div>
                                        <?php
                                    }

                            ?>
                            
                            <div class="col-md-8 ml-auto mr-auto text-center">
                                <form action="upload.php" method="POST">
                                <br>
                                        <input type="submit" name="btnSubir" value="Subir Archivos" class="btn btn-danger btn-round"> 
                                        <input type="submit" name="Nuevo" value="Nuevo" class="btn btn-default btn-round">

                                </form>
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
    $exito=0;

    $obj= new Upload();
    $obj->setFecha(Hoy());
    $obj->setIdUsuario($registro_user);
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
    echo "<script type='text/javascript'>alert('Se registraron correctamente todos los Archivos');</script>";
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
