<?php 
session_start();

if (isset($_POST['nombre'])) {
	$nombre = $_POST['nombre'];
}else{
	$nombre = "";
}
if (isset($_POST['correo'])) {
	$correo = $_POST['correo'];
}else{
	$correo = "";
}
if (isset($_POST['telf'])) {
	$telf = $_POST['telf'];
}else{
	$telf = "";
}
if (isset($_POST['telm'])) {
	$telm = $_POST['telm'];
}else{
	$telm = "";
}
if (isset($_POST['grado'])) {
	$grado = $_POST['grado'];
}else{
	$grado = "";
}
$nombre_img = $_FILES['imgps'] ['name'];
$tipo_img = $_FILES['imgps'] ['type'];
$tamaño_img = $_FILES['imgps'] ['size'];
if ($tamaño_img <= 1000000) {
	if ($tipo_img == 'image/jpeg' || $tipo_img == 'image/png' || $tipo_img == 'image/gif'){
		//Ruta de las imagenes
		$destino = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto1/img_p/';
		//mov imagen al directorio
		move_uploaded_file($_FILES['imgps'] ['tmp_name'], $destino.$nombre_img);
	}else{
		echo "Solo se pueden subir imagenes jps/png/gif";
	}
}else{
	echo "El tamaño debe ser menor a 1MB";
}
$conexion=mysqli_connect("localhost","root","","colegio");
if (mysqli_connect_errno()) {
	echo "Error al conectad con la base de datos";
	exit();
}
if (isset($_SESSION["codigo"])) {
	$id = $_SESSION["codigo"];
}else{
	$id = "";
}
if (isset($_SESSION["rol"])) {
	$rol = $_SESSION["rol"];
}else{
	$rol = "";
}
if ($rol == "Estudiante") {
	if ($nombre_img != '') {
	$sql = "UPDATE estudiantes SET foto='$nombre_img' WHERE id='$id'";
	$query=mysqli_query($conexion, $sql);
	}
	if (strlen($nombre) > 1) {
		$sql2 = "UPDATE estudiantes SET nombre='$nombre' WHERE id='$id'";
		$query2=mysqli_query($conexion, $sql2);
	}
	if (strlen($correo) > 15) {
		$sql3 = "UPDATE estudiantes SET correo='$correo' WHERE id='$id'";
		$query3=mysqli_query($conexion, $sql3);
	}
	if (strlen($telf) == 7) {
		$sql4 = "UPDATE estudiantes SET telefonof='$telf' WHERE id='$id'";
		$query4=mysqli_query($conexion, $sql4);
	}
	if (strlen($telm) == 10) {
		$sql5 = "UPDATE estudiantes SET telefonom='$telm' WHERE id='$id'";
		$query5=mysqli_query($conexion, $sql5);
	}
	if ($grado != '') {
		$sql6 = "UPDATE estudiantes SET grado='$grado' WHERE id='$id'";
		$query6=mysqli_query($conexion, $sql6);
	}
}elseif($rol == "Profesor"){
	if ($nombre_img != '') {
	$sql = "UPDATE profesores SET foto='$nombre_img' WHERE id='$id'";
	$query=mysqli_query($conexion, $sql);
	}
	if (strlen($nombre) > 1) {
		$sql2 = "UPDATE profesores SET nombre='$nombre' WHERE id='$id'";
		$query2=mysqli_query($conexion, $sql2);
	}
	if (strlen($correo) > 15) {
		$sql3 = "UPDATE profesores SET correo='$correo' WHERE id='$id'";
		$query3=mysqli_query($conexion, $sql3);
	}
	if (strlen($telf) == 7) {
		$sql4 = "UPDATE profesores SET telefonof='$telf' WHERE id='$id'";
		$query4=mysqli_query($conexion, $sql4);
	}
	if (strlen($telm) == 10) {
		$sql5 = "UPDATE profesores SET telefonom='$telm' WHERE id='$id'";
		$query5=mysqli_query($conexion, $sql5);
	}
	if ($grado != '') {
		$sql6 = "UPDATE profesores SET grado='$grado' WHERE id='$id'";
		$query6=mysqli_query($conexion, $sql6);
	}
}elseif($rol == "Acudiente"){
	if ($nombre_img != '') {
	$sql = "UPDATE padres SET foto='$nombre_img' WHERE id='$id'";
	$query=mysqli_query($conexion, $sql);
	}
	if (strlen($nombre) > 1) {
		$sql2 = "UPDATE padres SET nombre='$nombre' WHERE id='$id'";
		$query2=mysqli_query($conexion, $sql2);
	}
	if (strlen($correo) > 15) {
		$sql3 = "UPDATE padres SET correo='$correo' WHERE id='$id'";
		$query3=mysqli_query($conexion, $sql3);
	}
	if (strlen($telf) == 7) {
		$sql4 = "UPDATE padres SET telefonof='$telf' WHERE id='$id'";
		$query4=mysqli_query($conexion, $sql4);
	}
	if (strlen($telm) == 10) {
		$sql5 = "UPDATE padres SET telefonom='$telm' WHERE id='$id'";
		$query5=mysqli_query($conexion, $sql5);
	}
	if ($grado != '') {
		$sql6 = "UPDATE padres SET grado='$grado' WHERE id='$id'";
		$query6=mysqli_query($conexion, $sql6);
	}
}

header("Location:confp.php");


?>