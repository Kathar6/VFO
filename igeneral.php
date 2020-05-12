<!DOCTYPE html>
<html>
<head>
	<title>Información General-VFO</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Estilos.css">
	<script type="text/javascript" src="script.js"></script>
	<script src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
  $(document).ready(function(){
    $("#menu").hide();
    $(document).ready(function(){
      $("body").fadeIn(1000);
    });
    $("#menu2").click(function(){
      $(this).css("border-color","#c8c8c8 transparent transparent transparent");
      $("#menu").show(500);
    });
    $("#menu2").dblclick(function(){
      $(this).css("border-color","#fff transparent transparent transparent");
      $("#menu").hide(1000);
    });
  });
</script>
</head>
<body>
<nav id="menu">
<li class="d1">V</li><li class="d2">F</li><li class="d3">O</li>
<button class="inicio" onclick="fin()"><a href="index.php">Inicio</a></button>
<button class="contact"><a href="contacto.php"> Contacto</a></button>
<button class="infg"><a href="igeneral.php">I. general</a></button>
</nav>
<div id="menu2" onclick="menu()" ondblclick="cmenu()">.</div>
<div id="caja_p">
</div>
<div class="sc1">
	<div class="lg2"><li class="d1">V</li><li class="d2">F</li><li class="d3">O</li></div>
	<h1 class="h1">Informacion General</h1>
	<p class="pr1">Dirección: Calle 76 AE No. 83 C 41 .</p>
	<p class="pr1">Teléfono: (57) (4) 234 84 24</p>
	<p class="pr1">Correo: ie.villaflora@medellin.gov.co</p>
	<h2 class="h3">Objetivo</h2>
	<p class="pr1">Desarrollar una red social de uso para estudiantes, profesores y acudientes donde se daran noticias y acontecimientos recientes sobre la institución educativa villa flora</p>
	<h2 class="h3">Rector</h2>
	<table class="tbl2">
		<tr>
			<td>
			<p class="pr1" align="left">Profesion: ABOGADO</p>
			<p class="pr1" align="left">Nombre: Carlos Alberto Mazo L.</p>
			<p class="pr1" align="left">Colegio: Institución Educativa Villa Flora</p>
			<p class="pr1" align="left">Email: calmalo@une.net.co</p>
		</td>
		<td><img src="img/image.jpg" class="img_1"></td>
		</tr>
	</table>
</body>
</html>