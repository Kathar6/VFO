<?php 
session_start();
if (isset($_SESSION["logueado"])){
	$vali = $_SESSION["logueado"];
}else{
	$vali ="";
}
if ($vali != TRUE || $vali == FALSE || $vali == null) {
}elseif ($vali === TRUE) {
	header("Location:VFO.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Villa Flora Online-VFO</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="Style2.css">
	<script type="text/javascript" src="script.js"></script>
	<script src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).ready(function(){
				$("body").fadeIn(1000);
			});
		});
	</script>
<style>
a{
	width:100%;
	height:100%;
}
</style>
</head>
<body class="bd1">

	<div class="menu">
		
	<table cellspacing="0">
		<tr>
			<td class="td1"><a href="index.php"><li class="d1">V</li><li class="d2">F</li><li class="d3">O</li>
				</td></a>
			<td class="td2" onclick="isc()"><h1>Iniciar sesion</h1></td>
		</tr>
		<tr>
			<td class="td3" onclick="isc3()"><h1>Registrarse</h1></td>
			<td class="td4"><a href="contacto.php"><h1>Contacto</h1></td></a>
		</tr>
		<tr>
			<td class="td6"><a href="igeneral.php"><h1>Informacion General</h1></td></a>
			<td class="td5"><h1 class="txt1">Red Social para los estudiantes de la Institución Educativa Villa flora</h1></td>
		</tr>
	</table>
	</div>
	<div id="caja_1">
		<h1 class="tt1" onclick="isc2()">Atras</h1>
	<form action="login.php" method="post" class="f3">
	<li class="d1">V</li><li class="d2">F</li><li class="d3">O</li>
	<br>
	<br/>	
	<label for="corr2" class="l1">Correo</label>
	<br/>
	<input type="mail" name="corr" id="corr2" placeholder="Correo" autocomplete="off" required pattern="[A-Za-z0-9_-.]{1,50}" title="Este campo no puede contener caracteres especiales." />
	
	<label for="con" class="l2">Contraseña</label>
	<input type="password" name="con" id="con2" placeholder="Contraseña" autocomplete="off" required pattern="[A-Za-z0-9_-]{1,50}" title="Este campo no puede contener caracteres especiales como .,+,*,%." />
	<br>
	<br/>
	<h2 class="txt2">Rol</h2>
	<select name="rol" class="selc1">
			<option>Profesor</option>
			<option>Estudiante</option>
			<option>Acudiente</option>
	</select>
	<br>
	<br/>
	<CENTER><input type="submit" value="Ingresar" id="br"></CENTER>
</form>
	</div>
	<div id="caja_2">
	<h1 class="tt1" onclick="isc4()">Atras</h1>
		<br>
		<form action="send.php" method="post" class="f1">
		<tr>
			<li class="d1">V</li><li class="d2">F</li><li class="d3">O</li>
		<br>
		<br> 
		<label for="nom" id="la">Nombre*</label>
		<br>
		<input type="text" name="nom" id="nomr" placeholder="Nombre" autocomplete="off" required pattern="[A-Za-z ]{1,50}" title="Este campo no puede contener numeros ni caracteres especiales."/>
		<br>
		<br/>
		<label for="corr" id="la">Correo*</label>
		<br>
		<input type="email" name="corr" id="corr" placeholder="Correo" autocomplete="off" required pattern="[A-Za-z0-9_-.]{1,50}" title="Este campo no puede contener caracteres especiales."/>
		
		<br>
		<br/>
		<label for="con" id="la">Contraseña*</label>
		<br>
		<input type="password" name="con" id="conr" placeholder="Contraseña" autocomplete="off" required pattern="[A-Za-z0-9_-]{1,50}" title="Este campo no puede contener caracteres especiales como .,+,*,%."/>
		<br>
		<br/>
		<label for="fch" id="la">Fecha de Nacimiento*</label>
		<br>
		<input type="date" name="fch" id="fch" autocomplete="off" required pattern="[0-9-]{1,50}" title="Este campo no puede contener letras ni caracteres especiales."/>
		<br>
		<br/>
		<label id="la">Sexo*</label>
		<br>
		<select name="sexo" id="sexo">
			<option id="hom">Hombre</option>
			<option id="muj">Mujer</option>
		</select>
		<br>
		<br/>
		<label for="rol">Rol*</label>
		<br>
		<select name="rol" id="rol">
			<option>Profesor</option>
			<option>Estudiante</option>
			<option>Acudiente</option>
		</select>
		<br>
		<br/>
		(*)Obligatorio
		<br>
		<br/>
	<input type="submit" value="Registrarse" id="br2">
	<br>
	<br/>
	</center>
	</form>
	</div>
</body>
</html>