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

<!DOCTYPE html>
<html>
<head>
	<title>asd</title>
</head>
<body>

	<h1>Prueba UNO</h1>
	<?php
	 include_once('clsFotos.php');
	$new =new Foto();
	echo "0213164442";
	echo "<br>".$_SESSION['s_reg'];
	echo $new->ObtenerFoto('0213164442');
	echo $new->ObtenerPortada($_SESSION['s_reg']);
	

	
	?>

</body>
</html>