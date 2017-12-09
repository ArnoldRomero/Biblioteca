<!doctype html>
<html>
    <head>
        <title>Libros</title>
    </head>
    <body>
    	<?php 
        include_once('clsDocumento.php');
    	?>
    	<h1 align="center">Subir PDFs</h1>
    	<div style="max-width: 500px; border: 1px solid; margin: auto; padding: 5px;">

    		<form action="frmSubir.php" method="POST" enctype="multipart/form-data">
          <input type="text" name="txtId" readonly="false" placeholder="ID Documento">
          <br><br>
    			Titulo: <input type="text" name="txtTitu" value="">
    			<br><br>

    			Descripcion: <input type="text" name="txtDes" value="">
    			<br><br>
          Paginas: <input type="text" name="txtPag" value="">
          <br><br>
          <input type="file" name="archivo">
          <br><br>
    			<input type="submit" name="btn" value="Subir">
          <br>

    		</form>

    	</div>
      <?

      if (isset($_POST['btn'])) {

        $nombre=$_FILES['archivo']['name'];
        $asd=$nombre;
        $tipo=$_FILES['archivo']['type'];
        $tam=$_FILES['archivo']['size'];
        $ruta=$_FILES['archivo']['tmp_name'];
        $destino="documentos/".$nombre;

        if ($nombre=!"") {
          if (copy($ruta, $destino)) {
            $new = new Documento();
            $new->setTitulo($_POST['txtTitu']);
            $new->setDescripcion($_POST['txtDes']);
            $new->setSize($tam);
            $new->setFormato($tipo);
            $new->setPaginas($_POST['txtPag']);
            $new->setRuta($asd);
            if ($new->Guardar()) {
              echo "Exito";
            }
            else
              echo "Error";


           echo "<br>Titulo: ".$new->getTitulo();
            echo "<br>Descripcion: ".$new->getDescripcion();
            echo "<br>Tamaño: ".$new->getSize($tam);
            echo "<br>Formato: ".$new->getFormato($tipo);
            echo "<br>Paginas: ".$new->getPaginas();
            echo "<br>Nombre: ".$new->getRuta();
            echo $ruta;

          }
          else
            echo "Error";
        }


      }

      ?>

    </body>
</html>