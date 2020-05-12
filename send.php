<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="Style.css"/>
	<script type="text/javascript" src="script.js"></script>
	<script src="jquery-3.2.1.min.js"></script>
	
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


if ($rol == "Profesor"): ?>
	<form action="sendp.php" method="post" class="fp">
		<div class="tblp">
		<h1 align="center">Datos Adicionales</h1>
			<label for="AEN" id="la">Area que Enseña*</label><br>
			<input type="text" name="AEN" id="AEN" pattern="[A-Za-z]{1,30}" title="Este campo no puede tener numero ni caracteres especiales" required/>
			<br>
			<br/>
			<label for="telf" id="la">Telefono Fijo</label><br>
			<input type="text" name="telf1" id="telf1" pattern="[0-9]{1,7}" title="Este campo no puede contener letras ni caracteres especiales"/>
			<br>
			<br/>
			<label for="telm" id="la">Telefono Movil</label><br>
			<input type="text" name="telm1" id="telm1" pattern="[0-9]{1,10}" title="Este campo no puede contener letras ni caracteres especiales"/>
			<input type="hidden" name="nom" value="<?php echo $_POST['nom']?>">
			<input type="hidden" name="corr" value="<?php echo $_POST['corr']?>">
			<input type="hidden" name="sexo" value="<?php echo $_POST['sexo']?>">
			<input type="hidden" name="con" value="<?php echo $_POST['con']?>">
			<input type="hidden" name="fch" value="<?php echo $_POST['fch']?>">
			<br>
			<br/>
			(*)Obligatorio
			<br>
			<br/>
			<input type="submit" name="sbp" id="br">	
		</div>
	</form>
<?php endif ?>
<?php if ($rol == "Estudiante"): ?>
		<form action="sende.php" method="post" class="fp">
		<div class="tble">
			<h1 align="center">Datos Adicionales</h1>
			<br>
			<br/>
			<label for="telf" id="la">Telefono Fijo</label>
			<input type="text" name="telf2" id="telf2" pattern="[0-9]{1,7}" title="Este campo no puede contener letras ni caracteres especiales"/>
			<br>
			<br/>
			<label for="telm" id="la">Telefono Movil</label>
			<input type="text" name="telm2" id="telm2" pattern="[0-9]{1,10}" title="Este campo no puede contener letras ni caracteres especiales"/>
			<br>	
			<br/>
			<label for="Grd" id="la">Grado*</label>
			<select name="Grado1" required/>
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
			</select>
			<input type="hidden" name="nom" value="<?php echo $_POST['nom']?>">
			<input type="hidden" name="corr" value="<?php echo $_POST['corr']?>">
			<input type="hidden" name="sexo" value="<?php echo $_POST['sexo']?>">
			<input type="hidden" name="con" value="<?php echo $_POST['con']?>">
			<input type="hidden" name="fch" value="<?php echo $_POST['fch']?>">
			<br>
			<br/>
			(*)Obligatorio
			<br>
			<br/>
			<input type="submit" name="sbe" id="br">
		</div>
	</form>
	<?php endif ?>
	<?php if ($rol == "Acudiente"): ?>
		<form action="senda.php" method="post" class="fp">
			<div class="tbla">
				<h1 align="center">Datos Adicionales</h1>
				<label for="telf" id="la">Telefono Fijo</label>
				<input type="text" name="telf3" id="telf3" pattern="[0-9]{1,7}" title="Este campo no puede contener letras ni caracteres especiales">
				<br>
				<br/>
				<label for="telm" id="la">Telefono Movil</label>
				<input type="text" name="telm3" id="telm3" pattern="[0-9]{1,10}" title="Este campo no puede contener letras ni caracteres especiales">
				<br>
				<br/>
				<label for="Grd" id="la">Grado del Estudiante*</label>
				<select name="Grado2" required/>
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
					</select>
					<br>
				<br/>
				<label for="NE" id="la">Nombre del Estudiante*</label>
				<input type="text" name="NE" id="NE" pattern="[A-Za-z]{1-30}" title="Este campo no puede tener numero ni caracteres especiales" required/>
				<input type="hidden" name="nom" value="<?php echo $_POST['nom']?>">
				<input type="hidden" name="corr" value="<?php echo $_POST['corr']?>">
				<input type="hidden" name="sexo" value="<?php echo $_POST['sexo']?>">
				<input type="hidden" name="con" value="<?php echo $_POST['con']?>">
				<input type="hidden" name="fch" value="<?php echo $_POST['fch']?>">	
				<br>
				<br/>
				(*)Obligatorio
				<br>
				<br/>
				<input type="submit" name="sba" id="br">	
			</div>
		</form>
	<?php endif?>
</body>
</html>