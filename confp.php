<?php
session_start();
if (isset($_SESSION["logueado"])){
	$vali = $_SESSION["logueado"];
}else{
	$vali ="";
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
	}
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
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body class="bdi">
	<nav class="nav_1">
	<div class="in1">
	</div>
	<table border="1" style="border-color:transparent;">
		<tr>
			<td><div class="pst"><li id="d1">V</li><li id="d2">F</li><li id="d3">O</li></div></td>
			<td class="me1"><a href="VFO.php">Inicio</a></td>
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
<br/><p class="nombre"><?php echo explode(" ", $nombreb)[0]; ?></p>
<hr>
<a href="Confp.php" class="me7">Configurar Perfil</a>
<hr>
<a href="cerrar.php" class="me3-1">CerrarSesion</a>	
</div>
<div class="confp">
	<h2 align="center">Configuración</h2>
	<hr>
	<h3>Información Personal</h3>
	<?php if ($rol == "Estudiante"): ?>
		
	
	<table border="0">
		<form action="configp.php" method="post" enctype="multipart/form-data">
		<tr>
			<td width="100%">Nombre:<?php echo $nombreb;?></td>
			<td align="right"><span id="editar_n" style="cursor:pointer;" onclick="editar_n()">Editar</span><span id="cerrar_n" style="cursor:pointer;" onclick="cerrar_n()">Cerrar</span></td></td>
		</tr>
		<tr><td colspan="2"><input type="text" name="nombre" pattern="[A-Za-Z ]{1,50}" autocomplete="off" id="editar_nombre"></td></tr>
		<tr><td colspan="2"><hr></td></tr>
		<tr>
			<td width="100%">Correo:<?php echo $correob;?></td>
			<td align="right"><span id="editar_c" style="cursor:pointer;" onclick="editar_c()">Editar</span><span id="cerrar_c" style="cursor:pointer;" onclick="cerrar_c()">Cerrar</span></td>
		</tr>
		<tr><td colspan="2"><input type="text" name="correo" pattern="[A-Za-Z0-9_- ]{1,50}" autocomplete="off" id="editar_correo"></td></tr>
		<tr><td colspan="2"><hr></td></tr>
		<tr>
			<td width="100%">TelefonoFijo:<?php echo $telfb;?></td>
			<td align="right"><span id="editar_tf" style="cursor:pointer;" onclick="editar_tf()">Editar</span><span id="cerrar_tf" style="cursor:pointer;" onclick="cerrar_tf()">Cerrar</span></td></td>
		</tr>
		<tr><td colspan="2"><input type="text" name="telf" pattern="[0-9]{1,7}" autocomplete="off" id="editar_telf"></td></tr>
		<tr><td colspan="2"><hr></td></tr>
		<tr>
			<td width="100%">TelefonoMovil:<?php echo $telmb;?></td>
			<td align="right"><span id="editar_tm" style="cursor:pointer;" onclick="editar_tm()">Editar</span><span id="cerrar_tm" style="cursor:pointer;" onclick="cerrar_tm()">Cerrar</span></td></td>
		</tr>
		<tr><td colspan="2"><input type="text" name="telm" pattern="[0-9]{1,10}" autocomplete="off" id="editar_telm"></td></tr>
		<tr><td colspan="2"><hr></td></tr>
		<tr>
			<td width="100%">Grado:<?php echo $gradob;?></td>
			<td align="right"><span id="editar_grd" style="cursor:pointer;" onclick="editar_grado()">Editar</span><span id="cerrar_grado" style="cursor:pointer;" onclick="cerrar_grado()">Cerrar</span></td></td>
		</tr>
		<tr><td colspan="2">
			<select name="grado" id="editar_grado">
				<option id="null"></option>
				<option id="1-1">1-1</option>
				<option id="1-2">1-2</option>
				<option id="2-1">2-1</option>
				<option id="2-2">2-2</option>
				<option id="3-1">3-1</option>
				<option id="3-2">3-2</option>
				<option id="4-1">4-1</option>
				<option id="4-2">4-2</option>
				<option id="5-1">5-1</option>
				<option id="5-2">5-2</option>
				<option id="6-1">6-1</option>
				<option id="6-2">6-2</option>
				<option id="7-1">7-1</option>
				<option id="7-2">7-2</option>
				<option id="8-1">8-1</option>
				<option id="8-2">8-2</option>
				<option id="9-1">9-1</option>
				<option id="9-2">9-2</option>
				<option id="10-1">10-1</option>
				<option id="10-2">10-2</option>
				<option id="11-1">11-1</option>
				<option id="11-2">11-2</option>
			</select></td></tr>
		<tr><td colspan="2"><hr></td></tr>
	<?php elseif($rol == "Profesor"): ?>
		<table border="0">
		<form action="configp.php" method="post" enctype="multipart/form-data">
		<tr>
			<td width="100%">Nombre:<?php echo $nombreb;?></td>
			<td align="right"><span id="editar_n" style="cursor:pointer;" onclick="editar_n()">Editar</span><span id="cerrar_n" style="cursor:pointer;" onclick="cerrar_n()">Cerrar</span></td></td>
		</tr>
		<tr><td colspan="2"><input type="text" name="nombre" pattern="[A-Za-Z ]{1,50}" autocomplete="off" id="editar_nombre"></td></tr>
		<tr><td colspan="2"><hr></td></tr>
		<tr>
			<td width="100%">Correo:<?php echo $correob;?></td>
			<td align="right"><span id="editar_c" style="cursor:pointer;" onclick="editar_c()">Editar</span><span id="cerrar_c" style="cursor:pointer;" onclick="cerrar_c()">Cerrar</span></td>
		</tr>
		<tr><td colspan="2"><input type="text" name="correo" pattern="[A-Za-Z0-9_- ]{1,50}" autocomplete="off" id="editar_correo"></td></tr>
		<tr><td colspan="2"><hr></td></tr>
		<tr>
			<td width="100%">TelefonoFijo:<?php echo $telfb;?></td>
			<td align="right"><span id="editar_tf" style="cursor:pointer;" onclick="editar_tf()">Editar</span><span id="cerrar_tf" style="cursor:pointer;" onclick="cerrar_tf()">Cerrar</span></td></td>
		</tr>
		<tr><td colspan="2"><input type="text" name="telf" pattern="[0-9]{1,7}" autocomplete="off" id="editar_telf"></td></tr>
		<tr><td colspan="2"><hr></td></tr>
		<tr>
			<td width="100%">TelefonoMovil:<?php echo $telmb;?></td>
			<td align="right"><span id="editar_tm" style="cursor:pointer;" onclick="editar_tm()">Editar</span><span id="cerrar_tm" style="cursor:pointer;" onclick="cerrar_tm()">Cerrar</span></td></td>
		</tr>
		<tr><td colspan="2"><input type="text" name="telm" pattern="[0-9]{1,10}" autocomplete="off" id="editar_telm"></td></tr>
		<tr><td colspan="2"><hr></td></tr>
	<?php elseif($rol == "Acudiente"): ?>
		<table border="0">
		<form action="configp.php" method="post" enctype="multipart/form-data">
		<tr>
			<td width="100%">Nombre:<?php echo $nombreb;?></td>
			<td align="right"><span id="editar_n" style="cursor:pointer;" onclick="editar_n()">Editar</span><span id="cerrar_n" style="cursor:pointer;" onclick="cerrar_n()">Cerrar</span></td></td>
		</tr>
		<tr><td colspan="2"><input type="text" name="nombre" pattern="[A-Za-Z ]{1,50}" autocomplete="off" id="editar_nombre"></td></tr>
		<tr><td colspan="2"><hr></td></tr>
		<tr>
			<td width="100%">Correo:<?php echo $correob;?></td>
			<td align="right"><span id="editar_c" style="cursor:pointer;" onclick="editar_c()">Editar</span><span id="cerrar_c" style="cursor:pointer;" onclick="cerrar_c()">Cerrar</span></td>
		</tr>
		<tr><td colspan="2"><input type="text" name="correo" pattern="[A-Za-Z0-9_- ]{1,50}" autocomplete="off" id="editar_correo"></td></tr>
		<tr><td colspan="2"><hr></td></tr>
		<tr>
			<td width="100%">TelefonoFijo:<?php echo $telfb;?></td>
			<td align="right"><span id="editar_tf" style="cursor:pointer;" onclick="editar_tf()">Editar</span><span id="cerrar_tf" style="cursor:pointer;" onclick="cerrar_tf()">Cerrar</span></td></td>
		</tr>
		<tr><td colspan="2"><input type="text" name="telf" pattern="[0-9]{1,7}" autocomplete="off" id="editar_telf"></td></tr>
		<tr><td colspan="2"><hr></td></tr>
		<tr>
			<td width="100%">TelefonoMovil:<?php echo $telmb;?></td>
			<td align="right"><span id="editar_tm" style="cursor:pointer;" onclick="editar_tm()">Editar</span><span id="cerrar_tm" style="cursor:pointer;" onclick="cerrar_tm()">Cerrar</span></td></td>
		</tr>
		<tr><td colspan="2"><input type="text" name="telm" pattern="[0-9]{1,10}" autocomplete="off" id="editar_telm"></td></tr>
		<tr><td colspan="2"><hr></td></tr>
		
		<!--<tr><td><div class="g-recaptcha" data-sitekey="6LdK2DkUAAAAAK92lIiAzYnoQwnYNumOT2VW1k24"></div></td></tr>
		<tr><td colspan="2"><input type="submit" value="Guardar Cambios" class="sb_e2"></td></tr>
	</form>-->
<?php endif ?>
	</table>
	<h3>Cambiar Imagen</h3>
	<img src="img_p/<?php echo $ruta_img; ?>" class="marc1">
	<!--<form action="conp.php" method="post" enctype="multipart/form-data">-->
	<br/>
		<input type="file" name="imgps" accept="image/*" style="display:none;" id="arc_i">
		<input type="button" value="Cambiar" onclick="document.getElementById('arc_i').click();" accept="img/*" class="b_e1" >
		<input type="submit" value="Guardar Cambios" class="sb_e2">
	</form>	
</div>
</body>
</html>