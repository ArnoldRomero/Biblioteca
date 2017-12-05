<!doctype html>
<html lang="en">

<head>
    <?php
        include_once('html_head.php');
    ?>

</head>

<body>
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
                        <a href="" target="_blank" class="nav-link"><i class="fa fa-home"></i>Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="" target="_blank" class="nav-link"><i class="fa fa-upload"></i>Archivos</a>
                    </li>
                    <li class="nav-item">
                        <a href="" target="_blank" class="nav-link"><i class="fa fa-download"></i>Descargas</a>
                    </li>
                    <li class="nav-item">
                        <a href="" target="_blank" class="nav-link">  <i class="fa fa-user"></i>Mi Perfil</a>
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
                        <form class="col-sm-12">
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

    	</div>
        <!---------- CUERPO  ---------->
        <div>
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
                                        <input type="text" class="form-control" placeholder="Nro Registro" aria-describedby="basic-addon1">
                                        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    </div>
                                    <br><br>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Contraseña" aria-describedby="basic-addon2">
                                        <span class="input-group-addon" id="basic-addon2"><i class="fa fa-key" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="modal-footer">
                                <div class="left-side">
                                    <input type="submit" class="btn btn-default btn-link" data-dismiss="modal" value="Crear Cuenta">
                                </div>
                                <div class="divider"></div>
                                <div class="right-side">
                                    <input type="submit" class="btn btn-danger btn-link" Value="Acceder">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
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

<?php
    include_once('../admin/scriptJS.php');
?>

</html>
