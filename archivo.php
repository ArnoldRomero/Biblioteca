<?
ob_start();
include_once('clsCarro.php');
session_start();
?>
<?
include_once('clsTipo.php');
?>
<html>
<head>
<title>Seleccionar Archivo</title>

<!-- Llamada a la CSS -->
<link rel="stylesheet" href="estilo.css" type="text/css" />

</head>
<body>

<center><form id="form1" method="post" action="archivo.php" enctype="multipart/form-data">
<fieldset id="form">
<legend>SELECCIONAR ARCHIVO</legend>
<table width="342" border="0">
	<tr>
      	<td width="102"><label>ARCHIVO:</label></td>
      	<td width="230">
      		<input type="file" name="archivo">
      	</td>
    </tr>
    <tr>
      	<td><label>Tipo de Archivo </label></td>
      	<td>
        	<select name="txtTipo">
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
      	<td><label>Titulo</label></td>
      	<td>
        	<input name="txtTitulo" type="text">		
		</td>
    </tr>
	<tr>
	<td><label>Descripcion</label></td>
      	<td>	
			<textarea name="txtdes" placeholder="Descripcion del archivo" ></textarea>
	  	</td>
    </tr>
	
	<tr>
      
      	<td>
      	<center>
				<input type="submit" name="Agregar" value="Agregar Archivo" />
      	</center>
  		</td>
  		<td>
      	<center>
				<input type="submit" name="Volver" value="Volver" />
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
<?
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