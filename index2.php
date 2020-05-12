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
<html>
  <head>
    <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
  	<link rel="stylesheet" type="text/css" href="Style2.css">
  	<link rel="stylesheet" href="css/boostrap.min.css">
  	<script type="text/javascript" src="script.js"></script>
  	<script src="jquery-3.2.1.min.js"></script>
  	<script type="text/javascript">
  		$(document).ready(function(){
  			$(document).ready(function(){
  				$("body").fadeIn(1000);
  			});
  		});
  	</script>
    <title>Villa Flora Online-VFO</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-6" style="top:0%;left:-1%;overflow:auto;">
          <a href="index2.php"><li class="d1">V</li><li class="d2">F</li><li class="d3">O</li>
    				<p>Red Social para los estudiantes de la Institución Educativa Villa Flora</p></a>
        </div>
        <div class="col-lg-6" align="left">
          <h1 onclick="isc()" class="inicio_sesion">Iniciar Sesión</h1>
        </div>
      </div>
      <div class="row">
        <div class="">

        </div>
      </div>
    </div>
  </body>
</html>
