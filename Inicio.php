<!DOCTYPE html>
<html>
<head>
	<title>Villa Flora Online-VFO</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Estilos.css">
	<script type="text/javascript" src="script.js"></script>
</head>
<body onload="iniciar2()">

<center>
<nav id="menu">
<button class="inicio"><a href="VFO.php">Inicio</a></button>
<button class="contact"><a href="contacto.php"> Contacto</a></button>

<button class="infg"><a href="igeneral.php">I. general</a></button>
</nav>
<div id="menu2" onclick="menu()" ondblclick="cmenu()">.</div>

<section id="caja_1f">
	<div class="div2">


	<b><li class="p1">V</li><li class="p2">F</li><li class="p3">O</li>
	<p id="p1">Red Social para los profesores y estudiantes de la institución educativa Villa Flora</p>
	</b>
	</div>
</section>
<aside id="f3">
	<div class="div3">
		<h1 class="h2">Iniciar Sesion</h1>
<form action="send.php" method="post" class="f3">
		
	<label for="nom" class="l1">Nombre</label>
	<br>
	<input type="text" name="nom" id="nom" placeholder="Nombre" required/>
	<br>
	<br/>
	<label for="con" class="l2">Contraseña</label>
	<br>
	<input type="password" name="con" id="con" placeholder="Contraseña" required/>
	<br>
	<br/>
	<CENTER><input type="submit" value="Ingresar" id="br"></CENTER>
</form>
</div>
</aside>
</center>
<div class="logo">
  <a href="VFO.php"><li class="d1">V</li><li class="d2">F</li><li class="d3">O</li></a>
</div>
</body>
</html>