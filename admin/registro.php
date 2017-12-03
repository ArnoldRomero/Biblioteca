<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Inicio</title>

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
    <nav class="navbar navbar-expand-md bg-primary">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right burger-menu" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                 <span class="navbar-toggler-bar"></span>
             </button>
             <a class="navbar-brand" href="#">Administracion</a>
            <div class="collapse navbar-collapse" id="navbar-primary">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                         <a class="nav-link" href="#"><i class="nc-icon nc-compass-05" aria-hidden="true"></i>&nbsp;Busquedas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="nc-icon nc-single-02" aria-hidden="true"></i>&nbsp;Agregar</a>
                     </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="nc-icon nc-settings-gear-65" aria-hidden="true"></i>&nbsp;Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="nc-icon nc-settings-gear-65" aria-hidden="true"></i>&nbsp;Salir</a>
                    </li>
                </ul>
               </div>
           </div>
       </nav>
    <div class="wrapper">
        
        <div class="main" style="border: 1px solid red">
            <div class="section section-buttons">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tim-title">
                                <h3>Panel de Registro de:</h3>
                            </div>

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
                                            <form>
                                                <div class="form-group has-success">
                                                    <input type="text" class="form-control form-control-success" id="inputSuccess1" placeholder="Sigla de Materia">
                                                </div><br/>
                                                <div class="form-group has-success">
                                                    <input type="text" class="form-control form-control-success" id="inputSuccess1" placeholder="Materia">
                                                </div><br/>
                                                <div class="form-group">
                                                    <input type=submit class="btn btn-outline-success btn-round" value="Guardar" name="btnGuardar">
                                                    <input type=submit class="btn btn-outline-warning btn-round" value="Editar" name="btnEditar">
                                                    <input type=submit class="btn btn-outline-info btn-round" value="Nuevo" name="btnNuevo">
                                                    <input type=submit class="btn btn-outline-danger btn-round" value="Eliminar" name="btnEliminar">
                                                </div><br/>
                                            </form>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="tim-title">
                                                <h3>Lista de Materias Registradas </h3>
                                                <br/>
                                            </div>
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <br/>
                                            <nav aria-label="...">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item active">
                                                        <a class="page-link" href="#">3<span class="sr-only">(current)</span></a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
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
                                            <form>
                                                <div class="form-group has-success">
                                                    <input type="text" readonly="false" class="form-control form-control-success" id="inputSuccess1" placeholder="Id Autogenerado">
                                                </div><br/>
                                                <div class="form-group has-success">
                                                    <input type="text" class="form-control form-control-success" id="inputSuccess1" placeholder="Tipo de Documento">
                                                </div><br/>
                                                <div class="form-group">
                                                    <input type=submit class="btn btn-outline-success btn-round" value="Guardar" name="btnGuardar2">
                                                    <input type=submit class="btn btn-outline-warning btn-round" value="Editar" name="btnEditar2">
                                                    <input type=submit class="btn btn-outline-info btn-round" value="Nuevo" name="btnNuevo2">
                                                    <input type=submit class="btn btn-outline-danger btn-round" value="Eliminar" name="btnEliminar2">
                                                </div><br/>
                                            </form>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="tim-title">
                                                <h3>Lista de Tipos de Documento</h3>
                                                <br/>
                                            </div>
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <br/>
                                            <nav aria-label="...">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item active">
                                                        <a class="page-link" href="#">3<span class="sr-only">(current)</span></a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </nav>
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
    <footer class="footer">
        <div class="container">
            <div class="row">
                <nav class="footer-nav">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Contactanos</a></li>
                        <li><a href="#">Mapa del Sistema</a></li>
                    </ul>
                </nav>
                <div class="credits ml-auto">
                    <span class="copyright">
                        © <script>document.write(new Date().getFullYear())</script>, Creado por LaberintoTech.
                    </span>
                </div>
            </div>
        </div>
    </footer>
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
