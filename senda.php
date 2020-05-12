<!DOCTYPE html>
<html>
<head>
	<title>Registro-VFO</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	if (isset($_POST['nom'])) {
		$nombre = $_POST['nom'];
	}else{
		$nombre = "";
	}
	if (isset($_POST['corr'])) {
		$correo = $_POST['corr'];
	}else{
		$correo = "";
	}
	if (isset($_POST['sexo'])) {
		$sexo = $_POST['sexo'];
	}else{
		$sexo = "";
	}
	if (isset($_POST['rol'])) {
		$rol = $_POST['rol'];	
	}else{
		$rol = "";
	}
	if (isset($_POST['con'])) {
		$contrasena = $_POST['con'];
	}else{
		$contrasena = "";
	}
	if (isset($_POST['fch'])) {
		$fch = $_POST['fch'];
	}else{
		$fch = "";
	}
	if (isset($_POST['telf3'])) {
		$telf = $_POST['telf3'];
	}else{
		$telf= "";
	}
	if (isset($_POST['telm3'])) {
		$telm = $_POST['telm3'];
	}else{
		$telm= "";
	}
	if (isset($_POST['Grado2'])) {
		$grado= $_POST['Grado2'];
	}else{
		$grado = "";
	}
	if (isset($_POST['NE'])) {
		$ne = $_POST['NE'];
	}else{
		$ne = "";
	}

	$conexion = mysqli_connect("localhost","root","","colegio") or
				die("Error en la base de datos".mysqli_error($conexion));
	$query = mysqli_query($conexion,"INSERT INTO padres(nombre,correo,grado,telefonof,telefonom,sexo,contrasena,nestudiante,fecha,rol) VALUES ('$nombre','$correo','$grado','$telf','$telm','$sexo','$contrasena','$ne','$fch','$rol')")
		or die("Error en la insercion de datos".mysqli_error($conexion));
	mysqli_close($conexion);
	echo "<center><h1>Insercion exitosa</h1></center>";
	header("Location: index.php");
	?>
</body>
</html>