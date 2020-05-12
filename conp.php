<?php
	session_start();
	$nombre_img = $_FILES['imgps'] ['name'];
	$tipo_img = $_FILES['imgps'] ['type'];
	$tamaño_img = $_FILES['imgps'] ['size'];
	if ($tamaño_img <= 1000000) {
		if ($tipo_img == 'image/jpeg' || $tipo_img == 'image/png' || $tipo_img == 'image/gif') {
			//Ruta de las imagenes
			$destino = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto1/img_p/';
			//mov imagen al directorio
			move_uploaded_file($_FILES['imgps'] ['tmp_name'], $destino.$nombre_img);
		}else{
			echo "Solo se pueden subir imagenes jps/png/gif";
		}
	}else{
		echo "El tamaño debe ser menor a 1MB";
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
	$sql = "UPDATE estudiantes SET foto='$nombre_img' WHERE id='$id'";
	$query=mysqli_query($conexion, $sql);
	header("Location:confp.php");
?>