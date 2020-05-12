<?php session_start(); ?>

<?php
if (isset($_POST['txt_e'])) {
	$mensaje = $_POST['txt_e'];
}else{
	$mensaje = "";
}
$nombre_archivo = $_FILES["imgs"] ["name"];
$tipo_archivo = $_FILES["imgs"] ["type"];
$tamano_archivo = $_FILES["imgs"] ["size"];
$tmp_archivo = $_FILES["imgs"] ["tmp_name"];
if ($tamano_archivo <= 10485760) {
	$destino = $_SERVER['DOCUMENT_ROOT'] . '/Proyecto1/img_d/';
	//mov imagen al directorio
	move_uploaded_file($_FILES['imgs'] ['tmp_name'], $destino.$nombre_archivo);
	if (isset($_SESSION["codigo"])) {
		$id = $_SESSION["codigo"];
	}else{
		$id = "";
	}
	if (isset($_SESSION["rol"])) {
		$rol = $_SESSION["rol"];
	}else{
		$rol = "";
	}
	$conexion=mysqli_connect("localhost","root","","colegio");
	if (mysqli_connect_errno()) {
		echo "Error al conectar con la base de datos";
		exit();
	}
	if ($rol == "Estudiante") {
		$sqle= "SELECT * FROM estudiantes WHERE id='$id'";
		$querye = mysqli_query($conexion, $sqle)or die("errore".mysqli_error($conexion));;
		while ($fila = mysqli_fetch_array($querye)) {
			$correob = $fila["correo"];
			$contra = $fila["contrasena"];
			$foto = $fila["foto"];
			$nombre = $fila["nombre"];
		}
		$sqle2= "INSERT INTO publicacion (correo,contrasena,foto,texto) VALUES ('$correob','$contra','$nombre_archivo','$mensaje')";
		$querye2 = mysqli_query($conexion, $sqle2)or die("errore2".mysqli_error($conexion));
		$publi = "<div class='div_publi'><img src='img_p/$foto' class='fotopp'><span class='nomp1'>$nombre</span><hr><p class='msg_p'>$mensaje</p><img src='img_d/$nombre_archivo' class='img_s'><br/>";
		header("Location:VFO.php?publi=$publi");
	}elseif ($rol == "Profesor") {
		$sqlp= "SELECT * FROM profesores WHERE id='$id'";
		$queryp = mysqli_query($conexion, $sqlp) or die("errorp".mysqli_error($conexion));
		while ($fila = mysqli_fetch_array($queryp)) {
			$correob = $fila["correo"];
			$contra = $fila["contrasena"];
			$foto = $fila["foto"];
			$nombre = $fila["nombre"];
		}
		$sqlp2= "INSERT INTO publicacion (correo,contrasena,foto,texto) VALUES ('$correob','$contra','$nombre_archivo','$mensaje')";
		$queryp2 = mysqli_query($conexion, $sqlp2) or die("errorp2".mysqli_error($conexion));
		$publi = "<div class='div_publi'><img src='img_p/$foto' class='fotopp'><span class='nomp1'>$nombre</span><hr><p class='msg_p'>$mensaje</p><img src='img_d/$nombre_archivo' class='img_s'><br/>";
		header("Location:VFO.php?publi=$publi");
	}elseif ($rol == "Acudiente") {
		$sqla= "SELECT * FROM padres WHERE id='$id'";
		$querya = mysqli_query($conexion, $sqla)or die("errora".mysqli_error($conexion)); 
		while ($fila = mysqli_fetch_array($querya)) {
			$correob = $fila["correo"];
			$contra = $fila["contrasena"];
			$foto = $fila["foto"];
			$nombre = $fila["nombre"];
		}
		$sqla2= "INSERT INTO publicacion (correo,contrasena,foto,texto) VALUES ('$correob','$contra','$nombre_archivo','$mensaje')";
		$querya2 = mysqli_query($conexion, $sqla2) or die("errora2".mysqli_error($conexion));
		$publi = "<div class='div_publi'><img src='img_p/$foto' class='fotopp'><span class='nomp1'>$nombre</span><hr><p class='msg_p'>$mensaje</p><img src='img_d/$nombre_archivo' class='img_s'><br/>";
		header("Location:VFO.php?publi=$publi");
		}
	}
?>
