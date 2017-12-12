<?php
ob_start();
session_start();

if (isset($_SESSION['s_admin'])) {
    $user=$_SESSION['s_user'];
}
else
    header("Location: ../index.php");

?>
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
        include_once('../clsTipo.php');
        /*----------Fragmento de NAVEGACION -----------*/
  
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
                    <a class="navbar-brand" href="">PANEL DE ARMINISTRACION</a>
                </div>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav ml-auto">
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">  <i class="fa fa-user"></i><?php echo $user;?></a>
                        </li>
                        <li class="nav-item ">
                            <a href="../logout.php" class="btn btn-outline-danger btn-round"><i class="nc-icon nc-user-run"></i> Salir  </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <div class="wrapper">

            <div class="main" style="border-bottom: 3px solid green">
                <div class="section section-buttons">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <ul id="tabs" class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#materia" role="tab">Documentos</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="my-tab-content" class="tab-content text-center">


                                    <div class="tab-pane active" id="materia" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="tim-title">
                                                    <h3>Registro de Tipos de Documentos</h3>
                                                    <br/>
                                                </div>
                                                <form action="index.php" method="POST">
                                                    <div class="form-group has-success">
                                                        <input type="text"  readonly='false' class="form-control form-control-success" id="inputSuccess1" placeholder="Id de Tipo de Documentos" name="txt_id" value="<?php if($_GET['x_idm']){echo $_GET['x_idm'];}?>">
                                                    </div><br/>
                                                    <div class="form-group has-success">
                                                        <input type="text" class="form-control form-control-success" id="inputSuccess1" placeholder="Materia" name="txt_nombre" value="<?php if($_GET['x_nombrem']){echo $_GET['x_nombrem'];}?>">
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
                                                            <td><b>Codigo</b></td>
                                                            <td><b>Tipo</b></td>
                                                            <td><b>Acciones</b></td>
                                                        </tr>
                                                        <?php
                                                        $vista = new Tipo();
                                                        $dato=$vista->Buscar();
                                                        while ($fila=mysqli_fetch_object($dato)) {
                                                            echo "<tr>";
                                                                echo "<td>$fila->id_tip</td>";
                                                                echo "<td>$fila->nombre_tipo</td>";
                                                                echo "<td><a href='index.php?x_idm=$fila->id_tip&x_nombrem=$fila->nombre_tipo'><i class='nc-icon nc-send' aria-hidden='true'></i></a></td>";

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
        </div>
        <?php
        /**********PIE DE PAGINA***********/
        include_once('footer.php');
    ?>
    <?php
        function Guardar_Tipo()
        {
            if($_POST['txt_nombre'] )
            {
                
                $obj= new Tipo();

                $obj->setIdTipo($_POST['txt_id']);
                $obj->setNombre($_POST['txt_nombre']);
              
                if ($obj->Guardar()){

                    echo "<script type='text/javascript'>alert('Se registro correctamente');</script>";}
                else
                    echo "<script type='text/javascript'>alert('No existe el Registro');</script>";
            }
            else
                echo "<script type='text/javascript'>alert('No existe el Registro');</script>";
        }

        function Modificar_Tipo()
        {
            if($_POST['txt_nombre'])
            {
                $obj= new Tipo();

                $obj->setIdTipo($_POST['txt_id']);
                $obj->setNombre($_POST['txt_nombre']);
         
                if ($obj->Modificar())
                    echo "<script type='text/javascript'>alert('EXITO');</script>";
                else
                    echo "<script type='text/javascript'>alert('No existe el Registro');</script>";      
            }
            else
                echo "<script type='text/javascript'>alert('No existe el Registro');</script>";
        }

        function Eliminar_Tipo()
        {
            if($_POST['txt_id'])
            {
                $obj= new Tipo();
                $obj->setIdTipo($_POST['txt_id']);     
                if ($obj->Eliminar())
                    echo "<script type='text/javascript'>alert('EXITO');</script>";
                else
                    echo "<script type='text/javascript'>alert('No existe el Registro');</script>";        
            }
            else    
                echo "<script type='text/javascript'>alert('No existe el Registro');</script>";   
        }


        switch($_POST['botones'])
        {
            case "Nuevo":{
            }break;

            case "Guardar":{
            Guardar_Tipo();
            header("Location: index.php");
            }break;

            case "Modificar":{
            Modificar_Tipo();
            header("Location: index.php");

            }break;

            case "Eliminar":{
            Eliminar_Tipo();
            header("Location: index.php");
            }break;

            case "Buscar":{
            Buscar_Tipo();

            }break;
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
