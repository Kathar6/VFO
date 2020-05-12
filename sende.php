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
	if (isset($_POST['telf2'])) {
		$telf = $_POST['telf2'];
	}else{
		$telf= "";
	}
	if (isset($_POST['telm2'])) {
		$telm = $_POST['telm2'];
	}else{
		$telm= "";
	}
	if (isset($_POST['Grado1'])) {
		$grado= $_POST['Grado1'];
	}else{
		$grado = "";
	}
	if (isset($_POST['fch'])) {
		$fch = $_POST['fch'];
	}else{
		$fch = "";
	}

	$conexion = mysqli_connect("localhost","root","","colegio") or
				die("Error en la base de datos".mysqli_error());
	$query = mysqli_query($conexion,"INSERT INTO estudiantes(nombre,correo,grado,telefonof,sexo,telefonom,contrasena,fecha,rol) VALUES ('$nombre','$correo','$grado','$telf','$sexo','$telm','$contrasena','$fch','$rol')")
		or die("Error en la insercion de datos".mysqli_error());

	mysqli_close($conexion);
	echo "<center><h1>Insercion exitosa</h1></center>";
	header("Location: index.php");
	?>
</body>
</html>