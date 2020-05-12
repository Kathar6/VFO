<?php 
	session_start();
if (isset($_POST['g-recaptcha-response'])) {
	$response_recaptcha = $_POST['g-recaptcha-response'];
}else{
	$response_recaptcha = "";
}

if (isset($response_recaptcha) && $response_recaptcha){
	var_dump($_POST);
	$secret = "6LdK2DkUAAAAAMYDyUlrleRl6_bOTpgLWKQobvpk";
	$ip = $_SERVER["REMOTE_ADDR"];
	$validation_server = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response_recaptcha&remoteip=$ip");
	var_dump($validation_server);
	$array = json_decode($result,TRUE);
	echo "<br>";
	if ($array["success"]){
		/*
		if (isset($_POST['nombre'])) {
			$nombre = $_POST['nombre'];
		}else{
			$nombre = "";
		}
		if (isset($_POST['correo'])) {
			$correo = $_POST['correo'];
		}else{
			$correo = "";
		}
		if (isset($_POST['telf'])) {
			$telf = $_POST['telf'];
		}else{
			$telf = "";
		}
		if (isset($_POST['telm'])) {
			$telm = $_POST['telm'];
		}else{
			$telm = "";
		}
		if (isset($_POST['grado'])) {
			$grado = $_POST['grado'];
		}else{
			$grado = "";
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
		$sql = "UPDATE estudiantes SET nombre ='$nombre' WHERE id='$id'";
		$query=mysqli_query($conexion, $sql2);
		$sql2 = "UPDATE estudiantes SET correo ='$correo' WHERE id='$id'";
		$query2=mysqli_query($conexion, $sql3);
		$sql3 = "UPDATE estudiantes SET telefonof ='$telf' WHERE id='$id'";
		$query3=mysqli_query($conexion, $sql4);
		$sql4 = "UPDATE estudiantes SET telefonom ='$telm' WHERE id='$id'";
		$query4=mysqli_query($conexion, $sql5);
		header("Location:confp.php");*/
	}else{
		echo "No eres humano";
	}
}else{
	echo "error";
}

?>