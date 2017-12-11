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

include_once('clsDocumento.php');
include_once('clsDownload.php');



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


function Down(){
$des = new Documento();
$dato=$des->Buscard($_GET['arc']);
$fila=mysqli_fetch_array($dato);

  $file = $fila['nombre_ar'];

  if (is_file("archivos/".$file)) 
  {
    $filename = $fila['nombre_ar']; // el nombre con el que se descargará, puede ser diferente al original
    /*header("Content-Type: application/octet-stream");*/
    header("Content-Type: application/force-download");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    readfile($file);
    	
    	return true;
  } 
}

$d = new Documento();
$dat=$d->Buscard($_GET['arc']);
$f=mysqli_fetch_array($dat);

if (Down()) {
	$usuario = $cod_user;
	$hoy=Hoy();
	$id_archivo=$f['id_archivo'];

	$down = new Download();
	$down->setFecha($hoy);
	$down->setUsuario($usuario);
	$down->setArchivo($id_archivo);
	$down->Guardar();
}
	

?>