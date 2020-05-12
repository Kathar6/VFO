<!DOCTYPE html>
<html>
<head>
<title>Contacto-VFO</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="Estilos.css">
<script src="script.js"></script>
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
<div><li class="d1">V</li><li class="d2">F</li><li class="d3">O</li></div>
<button class="inicio" onclick="fin()"><a href="index.php">Inicio</a></button>
<button class="contact"><a href="contacto.php">Contacto</a></button>
<button class="infg"><a href="igeneral.php">I. general</a></button>
</nav>
<div id="menu2" onclick="menu()" ondblclick="cmenu()">.</div>

<div class="caja_2">
<div class="lg"><li class="d1">V</li><li class="d2">F</li><li class="d3">O</li></div>
<center><li class="t1">Contacto</li></center>
<center>
<form name="contacto" method="post" action="sendc.php" class="f2"> 
	
<table width="450px">
<tr>

 <td valign="top">
  <label for="nom" id="la">Nombre:</label>
 </td>
 
 <td valign="top">
  <input  type="text" name="nom" maxlength="50" size="30" required/>
 </td>

</tr>

<tr>
<td><br></td>
</tr>
<tr>

 <td valign="top">
  <label for="email" id="la">Correo eléctronico:</label>
 </td>

 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30" required/>
 </td>
</tr>
 <tr>
 <td><br></td>
</tr>

<br>
<tr>
 <td valign="top">
  <label for="tele" id="la">Teléfono:</label>
 </td>
 <td valign="top">
  <input  type="text" name="tele" maxlength="30" size="30" required/>
 </td>
</tr>
 <tr>
 <td><br></td>
</tr>
<tr>
	<td valign="top">
		<label for="asunto" id="la">Asunto:</label>
	</td>
	<td valign="top">
		<input type="text" name="asunto"  maxlength="80" size="30">
	</td>
</tr>
 <tr>
 <td><br></td>
</tr>
<tr>
 <td valign="top">
 	<br/>
  <label for="message" id="la">Mensaje:</label>
 </td>
 <td>

  <textarea  name="message" maxlength="1000" cols="40" rows="10" class="txta"></textarea>
 </td>
</tr>
 <tr>
 <td><br></td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Enviar" class="be">
  <!--<input type="reset" name="borrar" value="Eliminar" class="bel">--> 
 </td>
</tr>

</table>

</form>
</div>
	</body>
	</html>
