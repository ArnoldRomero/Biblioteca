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
                                                    <input type="text" class="form-control form-control-success" id="inputSuccess1" placeholder="Sigla de Materia" name="txt_id1">
                                                </div><br/>
                                                <div class="form-group has-success">
                                                    <input type="text" class="form-control form-control-success" id="inputSuccess1" placeholder="Materia" name="txt_nombre1">
                                                </div><br/>
                                                <div class="form-group">
                                                    <input type=submit class="btn btn-outline-success btn-round" value="Guardar" name="btnGuardar1">
                                                    <input type=submit class="btn btn-outline-warning btn-round" value="Editar" name="btnEditar1">
                                                    <input type=submit class="btn btn-outline-info btn-round" value="Nuevo" name="btnNuevo1">
                                                    <input type=submit class="btn btn-outline-danger btn-round" value="Eliminar" name="btnEliminar1">
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
                                                    <input type="text" readonly="false" class="form-control form-control-success" id="inputSuccess1" placeholder="Id Autogenerado" name="txt_id2">
                                                </div><br/>
                                                <div class="form-group has-success">
                                                    <input type="text" class="form-control form-control-success" id="inputSuccess1" placeholder="Tipo de Documento" name="txt_nombre2">
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
    <?php
        include_once('footer.php');
    ?>
    <?php
        include_once('funciones_Materia.php');
        include_once('funciones_Tipo.php');
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
