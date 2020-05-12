<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
include ('send.php');
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
if (isset($_POST['AEN'])) {
	$aen = $_POST['AEN'];
}else{
	$aen ="";
}
if (isset($_POST['telf1'])) {
	$telf = $_POST['telf1'];
}else{
	$telf="";
}
if (isset($_POST['telm1'])) {
	$telm = $_POST['telm1'];
}else{
	$telm="";
}
if (empty($nombre)) {
	echo "Error";
}
$conectar = mysqli_connect("localhost","root","","colegio") or 
	die("Error al ingresar a la base de datos".mysqli_error($conectar));
mysqli_query($conectar,"INSERT INTO profesores (nombre,area,correo,sexo,telefonof,telefonom,contrasena,fecha,rol)  VALUES ('$nombre','$aen','$correo','$sexo','$telf','$telm','$contrasena','$fch','$rol')") or
	die("Error en la insercción del usuario".mysqli_error($conectar));
mysqli_close($conectar);
echo "Registro exitoso!";
header("Location: index.php");
?>
</body>
</html>