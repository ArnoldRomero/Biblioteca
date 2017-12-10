<!DOCTYPE html>
<html>
<head>
	<title>Fecha</title>
</head>
<body>
	<form action="fecha.php" method="POST">
	<input type="date" name="txtfacha">
	<input type="submit" name="btn" value="Enviar">
	</form>
<?php
	if (isset($_POST['btn'])) {

		$hoy=getdate();
		if ($hoy['mday']<10) {
			$dia="0".$hoy['mday'];
			$hoydia=$hoy['year']."-".$hoy['mon']."-".$dia;
		}
		else
		{
			$hoydia=$hoy['year']."-".$hoy['mon']."-".$hoy['mday'];
		}
		
		echo "Hoy es: ".$hoydia;

		echo "<br><br>";
		echo "Se Coloco el dia: ".$_POST['txtfacha'];
	}

	

	

?>
</body>
</html>