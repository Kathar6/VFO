<?php
session_start();
if (isset($_SESSION["logueado"])){
	$vali = $_SESSION["logueado"];
}else{
	$vali ="";
}
if (isset($_SESSION["nombre"])){
	$n = $_SESSION["nombre"];
}else{
	$n ="";
}
if ($vali != TRUE || $vali == FALSE || $vali == null) {
	header("Location:index.php");
	die();
}elseif ($vali === TRUE) {
	
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
	$sql= "SELECT * FROM estudiantes WHERE id='$id'";
	$query = mysqli_query($conexion, $sql);
	while ($fila = mysqli_fetch_array($query)) {
		$ruta_img = $fila["foto"];
		$nombreb = $fila["nombre"];
		$correob = $fila["correo"];
		$telfb = $fila["telefonof"];
		$telmb = $fila["telefonom"];
		$gradob = $fila["grado"];
		$foto = $fila["foto"];
	}
}elseif ($rol == "Profesor") {
	$sql= "SELECT * FROM profesores WHERE id='$id'";
	$query = mysqli_query($conexion, $sql);
	while ($fila = mysqli_fetch_array($query)) {
		$ruta_img = $fila["foto"];
		$nombreb = $fila["nombre"];
		$correob = $fila["correo"];
		$telfb = $fila["telefonof"];
		$telmb = $fila["telefonom"];
		$gradob = $fila["grado"];
		$foto = $fila["foto"];
	}
}elseif ($rol == "Acudiente") {
	$sql= "SELECT * FROM padres WHERE id='$id'";
	$query = mysqli_query($conexion, $sql);
	while ($fila = mysqli_fetch_array($query)) {
		$ruta_img = $fila["foto"];
		$nombreb = $fila["nombre"];
		$correob = $fila["correo"];
		$telfb = $fila["telefonof"];
		$telmb = $fila["telefonom"];
		$gradob = $fila["grado"];
		$foto = $fila["foto"];
	}
}
$sqlp = "SELECT * FROM publicacion WHERE id='$id'";
$queryp = mysqli_query($conexion, $sqlp);
while ($fila = mysqli_fetch_array($queryp)) {
	$nombre_archivo = $fila["foto"];
}
if (isset($_FILES['imgps'] ['name']))
	$img = $_FILES['imgps'] ['name'];
else {
	$img ="";
}
?>
<!DOCTYPE html>
<html lang="spanish">
<head>
	<title>Villa Flora Online-VFO</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Style.css">
	<script type="text/javascript" src="script.js"></script>
	<script src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).ready(function(){
				$("body").fadeIn(1000);
			});
		});
	</script>
	<style type="text/css">
		body{
			display:none;
		}
	</style>
</head>
<body class="bdi">
<nav class="nav_1">
	<div class="in1">
	</div>
	<table border="1" style="border-color:transparent;">
		<tr>
			<td><div class="pst"><li id="d1">V</li><li id="d2">F</li><li id="d3">O</li></div></td>
			<td class="me3"><a href="VFO.php">Inicio</a></td>
			<td class="me1" onclick="dp()">Perfil</td>
			<td class="me4"><a href="Contacto.php" class="me4-1">Contacto</a></td>
			<td class="me5"><a href="igeneral.php" class="me5-1">Informacion general</a></td>
		</tr>
	</table>
</nav>
<div id="perf">
<h2>Perfil</h2>
<hr>
<img src="img/flecha.png" class="fl1" onclick="dp2()">	
<img src="img_p/<?php echo $ruta_img; ?>" class="marc">
<br/><p class="nombre"><?php echo explode(" ", $n)[0]; ?></p>
<hr>
<a href="Confp.php" class="me7">Configurar Perfil</a>
<hr>
<a href="cerrar.php" class="me3-1">CerrarSesion</a>		
</div>
<div class="env_p">
	<center>
	<form action="imagenes.php" method="post" enctype="multipart/form-data">
		<p class="pp">¿Que deseas publicar?</p>
		<br>
		<textarea name="txt_e" class="txt_a_1"></textarea>
		<input type="file" name="imgs" style="display:none;" id="arc_i">
		<input type="button" value="Subir archivo" onclick="document.getElementById('arc_i').click();" class="b_e">
		<br/>
		<br>
		<input type="submit" value="Publicar" class="sb_e">

	</form>

	</center><br>
</div>

	<hr>
</body>

</html>