<?php
ob_start();
include_once('clsCarro.php');
session_start();
?>
<?php
include_once('clsTipo.php');
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
<center><form id="form1" method="post" action="archivo.php" enctype="multipart/form-data" >
<fieldset id="form">
<legend>SELECCIONAR ARCHIVO</legend>
<table max-width="200" border="0">
	<tr>
      	<td width="102"><label>ARCHIVO:</label></td>
      	<td width="230">
      		<input type="file" name="archivo" >
      	</td>
    </tr>
    <tr>
      	<td><label>TIPO DOCUMENTO </label></td>
      	<td>
        	<select name="txtTipo" class="form-control form-control-success">
        		<?php
        			$new = new Tipo();
        			$dato=$new->Buscar();
        			while ($fila=mysqli_fetch_object($dato)) {
        				echo "<option value='$fila->id_tip'> $fila->nombre_tipo </option>";
        			}
        		?>
        	</select>		
		</td>
    </tr>
    <tr>
      	<td><label>TITULO</label></td>
      	<td>
        	<input name="txtTitulo" type="text" class="form-control form-control-success">		
		</td>
    </tr>
	<tr>
	<td><label>DESCRIPCION</label></td>
      	<td>	
			<textarea name="txtdes" placeholder="Descripcion del archivo" class="form-control form-control-success" ></textarea>
	  	</td>
    </tr>
	
	<tr>
      
      	<td colspan="2">
      	<center>
				<input type="submit" name="Agregar" value="Agregar Archivo" class="btn btn-outline-info btn-round" />

				<input type="submit" name="Volver" value="Volver" class="btn btn-outline-default btn-round" />
      	</center>
  		</td>
    </tr>
	
	<tr>
      <td colspan="2">
	 
	  </td>
    </tr>
	<tr>
	<td colspan="2">

	</td>
	</tr>

</table></form></center>
</div>
<?php
	if ($_POST["Agregar"])
	{
		$nombre=$_FILES['archivo']['name'];
        $asd=$nombre;
        $formato=$_FILES['archivo']['type'];
        $tam=$_FILES['archivo']['size'];
        $ruta_temp=$_FILES['archivo']['tmp_name'];
        $destino="archivos/".$nombre;
        copy($ruta_temp, $destino);

		if($_POST['txtTipo']&&$_POST['txtTitulo'])
		{
			$_SESSION["carrito"]->Insertar($_POST['txtTitulo'],$_POST['txtTipo'],$_POST['txtdes'],$asd,$tam,$formato,$destino);
			echo "<script>opener.document.location.reload() 
					window.close()</script>";
		}
		else
		{
			echo "Debe introducir todos los datos";
		}
	}
	
	if($_POST['Volver'])
	{
		echo "<script>window.close()</script>";
	}
	
?>
</body>
</html>