<?php 
$Nombre = $_POST['nom'];
$Correo = $_POST['email'];
$Telefono = $_POST['tele'];
$Mensaje = $_POST['message'];
$Asunto = $_POST['asunto'];
$Servidor = 'From:'.$_POST['email'];
$comentario =" 

Nombre: $_POST[nom]

Correo: $_POST[email]

Telefono: $_POST[tele]

Comentario: $_POST[message]";
mail('matepabon@gmail.com',$Asunto,$comentario)
?>