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
include_once('clsFotos.php');
?>
<html>
<head>
<title>Seleccionar Archivo</title>

<!-- Llamada a la CSS -->
    <link rel="stylesheet" href="estilo.css" type="text/css" />

    <meta charset="utf-8" />
    <!--<link rel="icon" type="image/png" href="assets/img/favicon.ico">-->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

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
    <link href="assets/css/nucleo-icons.css" rel="stylesheet">
</head>
<body>
<div class="form-group">
<center><form id="form1" method="post" action="subirfotos.php" enctype="multipart/form-data" >
<table max-width="200" border="2" class="table table-striped">
     <tr>
        <td align="center"><h6>----SELECCIONAR FOTOS----</h6></td>
    </tr>
	   <tr>
      	<td width='230'>
          <h6>Foto de Perfil:  (*jpg)</h6>
      		<input type='file' name='archivoF' >
          <br><br>
      	</td>
    </tr>

    <tr>
       <br><br>
        <td width="230">
          <h6>Foto de Portada:  (*jpg)</h6>
          <input type="file" name="archivoP" >
          <br><br>
        </td>
    </tr>
  
	<tr>
      	<td colspan="2">
      	<center>
				<input type="submit" name="Agregar" value="Subir Foto" class="btn btn-outline-info btn-round" />

				<input type="submit" name="Volver" value="Volver" class="btn btn-outline-default btn-round" />
      	</center>
  		</td>
    </tr>

</table></form></center>
</div>
<?php
	if ($_POST["Agregar"])
	{    
    if ($_FILES['archivoF']['name']!=null||$_FILES['archivoP']['name']!=null) 
    {
        $img=new Foto();
        /////////DATOS PARA FOTO/////////
        $nuevo=$_FILES['archivoF']['name'];
        $nombre=$cod_user.".jpg";
        $formato=$_FILES['archivoF']['type'];
        $ruta_temp=$_FILES['archivoF']['tmp_name'];
        $destino="assets/img/faces/".$nombre;

        //////////DATOS PARA PORTADA//////////
        $nuevoP=$_FILES['archivoP']['name'];
        $nombreP=$cod_user.".jpg";
        $formatoP=$_FILES['archivoP']['type'];
        $ruta_tempP=$_FILES['archivoP']['tmp_name'];
        $destinoP="assets/img/portada/".$nombreP;

        if ($nuevo!=null) 
        {
          if ($formato=="image/jpeg") {

            copy($ruta_temp, $destino);
            $img->InsertarF($cod_user,$nombre);
            $mf="-Foto Subida correctamente- ";
          }
          else
            $mf="-Foto no es JPG introduce una imagen JPG- ";

        }
          
        if ($nuevoP!=null) 
        {
          if ($formatoP=="image/jpeg") 
          {
            copy($ruta_tempP, $destinoP);
            $img->InsertarP($cod_user,$nombreP);
            $mp="-Foto de portada guardada correctamente- ";
          }
          else
            $mp="-Portada no es JPG introduce una imagen JPG- ";
          
        }
        
    }
    else
      $nulo="-No Selecciono archivos-";

    echo "<script type='text/javascript'>alert('".$mf.$mp.$nulo."');</script>";
  }
  
	
	if($_POST['Volver'])
	{
		echo "<script>window.close()</script>";
	}
	
?>
</body>
</html>