<!DOCTYPE html>
<html>
<head>
	<title>Registarse-VFO</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Estilos.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body>

<nav id="menu">
<button class="inicio" ><a href="VFO.php">Inicio</a></button>
<button class="contact"><a href="contacto.php">Contacto</a></button>
<button class="infg"><a href="igeneral.php">I. general</a></button>
</nav>
<div id="menu2" onclick="menu()" ondblclick="cmenu()">.</div>
<section id="caja_r">
	<center>
		
		<br>
	<form action="send.php" method="post" class="f1">
		<li class="t1">Registro</li>
		

		<tr>
		<br>
		
		<br> 
		<label for="nom" id="la">Nombre:</label>
		<br>
		<br/>
		<input type="text" name="nom" id="nomr" placeholder="Nombre" required/>
		<br>
		<br/>
		<label for="corr" id="la">Correo:</label>
		<br>
		<br/>
		<input type="text" name="corr" id="corr" placeholder="Correo" required/>
		<br>
		<br/>
		<label for="con" id="la">Contraseña:</label>
		<br>
		<br/>
		<input type="password" name="con" id="conr" placeholder="Contraseña" required/>
		<br>
		<br/>
		<label for="fch" id="la">Fecha de Nacimiento:</label>
		<br>
		<br/>
		<input type="date" name="fch" id="fch" required/>
		<br>
		<br/>
		<label id="la">Sexo:</label>
		<br>
		<br/>
		<select name="sexo" id="sexo">
			<option id="hom">Hombre</option>
			<option id="muj">Mujer</option>
		</select>
		
		<table>
		<tr>
			
			<td colspan="2"><input type="radio" name="TU" id="radio1" onclick="opciones()"><p id="j1">Profesor</p>
	
		<input type="radio" name="TU" id="radio2" onclick="opciones()"><p id="j1" >Estudiante</p>
		
		<input type="radio" name="TU" id="radio3" onclick="opciones()"><p id="j1" >Acudiente</p></td>
		</tr>
		
		
	</table>
	<div id="op1">
		<table>
			<tr>
			<td><label for="AEN" id="la">Area que Enseña</label></td>
			<td><input type="text" name="AEN" id="AEN"></td>
			</tr>
			<tr>
			<td><label for="telf" id="la">Telefono Fijo</label></td>
			<td><input type="text" name="telf" id="telf"></td>
			</tr>
			<tr>
			<td><label for="telm" id="la">Telefono Movil</label></td>
			<td><input type="text" name="telm" id="telm"></td>
			</tr>
					
		</table>
	</div>
	<div id="op2">
		<table>
			<tr>
			<td><label for="telf" id="la">Telefono Fijo</label></td>
			<td><input type="text" name="telf" id="telf"></td>
			</tr>
			<tr>
			<td><label for="telm" id="la">Telefono Movil</label></td>
			<td><input type="text" name="telm" id="telm"></td>
			</tr>	
			<tr>
				<td><label for="Grd" id="la">Grado</label></td>
			<td><select name="Grado1" required/>
				<option id="1-1">1°1</option>
				<option id="1-2">1°2</option>
				<option id="2-1">2°1</option>
				<option id="2-2">2°2</option>
				<option id="3-1">3°1</option>
				<option id="3-2">3°2</option>
				<option id="4-1">4°1</option>
				<option id="4-2">4°2</option>
				<option id="5-1">5°1</option>
				<option id="5-2">5°2</option>
				<option id="6-1">6°1</option>
				<option id="6-2">6°2</option>
				<option id="7-1">7°1</option>
				<option id="7-2">7°2</option>
				<option id="8-1">8°1</option>
				<option id="8-2">8°2</option>
				<option id="9-1">9°1</option>
				<option id="9-2">9°2</option>
				<option id="10-1">10°1</option>
				<option id="10-2">10°2</option>
				<option id="11-1">11°1</option>
				<option id="11-2">11°2</option>
			</select></td>
			</tr>	
		</table>
	</div>
	<div id="op3">
		<table>
			<tr>
			<td><label for="telf" id="la">Telefono Fijo</label></td>
			<td><input type="text" name="telf" id="telf"></td>
		</tr>
		<tr>
			<td><label for="telm" id="la">Telefono Movil</label></td>
			<td><input type="text" name="telm" id="telm"></td>
		</tr>
		<tr>
			<td><label for="Grd" id="la">Grado del Estudiante</label></td>
			<td><select name="Grado2" required/>
				<option id="1-1">1°1</option>
				<option id="1-2">1°2</option>
				<option id="2-1">2°1</option>
				<option id="2-2">2°2</option>
				<option id="3-1">3°1</option>
				<option id="3-2">3°2</option>
				<option id="4-1">4°1</option>
				<option id="4-2">4°2</option>
				<option id="5-1">5°1</option>
				<option id="5-2">5°2</option>
				<option id="6-1">6°1</option>
				<option id="6-2">6°2</option>
				<option id="7-1">7°1</option>
				<option id="7-2">7°2</option>
				<option id="8-1">8°1</option>
				<option id="8-2">8°2</option>
				<option id="9-1">9°1</option>
				<option id="9-2">9°2</option>
				<option id="10-1">10°1</option>
				<option id="10-2">10°2</option>
				<option id="11-1">11°1</option>
				<option id="11-2">11°2</option>
		</tr>
		<tr>
			<td><label for="NE" id="la">Nombre del Estudiante</label></td>
			<td><input type="text" name="NE" id="NE" required/></td>
		</tr>		
		</table>
	</div>
			<br>
			<br/>
	<input type="submit" value="Registrarse" id="br2">
	<br>
	<br/>
	</center>
	</form>

</section>

<div class="logo">
  <a href="VFO.php"><li class="d1">V</li><li class="d2">F</li><li class="d3">O</li></a>
</div>
<aside class="asd1">
	<div class="div1">
		<h1 class="h">Ya tienes una cuenta?</h1>
		<button class="b1"><a href="inicio.php">Iniciar sesion</a></button>
	</div>
</aside>
</body>
</html>