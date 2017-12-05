<!doctype html>
<html lang="en">

<head>
    <?php
        include_once('html_head.php');
    ?>

</head>

<body>
    <?php
        include_once('html_navigation.php');
    ?>
    <div class="wrapper">
        
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
