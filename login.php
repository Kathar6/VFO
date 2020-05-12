<!DOCTYPE html>
<html>
<head>
	<title>Villa Flora Online</title>
</head>
<body>
<?php
	if (isset($_POST['corr'])) {
		$correo = $_POST['corr'];
	}else{
		$correo = "";
	}
	if (isset($_POST['con'])) {
		$contrasena = $_POST['con'];
	}else{
		$contrasena = "";
	}
	if (isset($_POST['rol'])) {
		$selc = $_POST['rol']; 
	}else{
		$selc = "";
	}
	if ($selc == "Estudiante") {
		$conx = mysqli_connect("localhost","root","","colegio") or 
			die("Error".mysqli_error($conx));
	$query = mysqli_query($conx,"SELECT a.correo, a.contrasena FROM estudiantes a WHERE a.correo='$correo'AND a.contrasena ='$contrasena'") or 
			die("Error".mysqli_error($conx));
		while ($row = mysqli_fetch_array($query)){
		echo $email = $row['correo'];
		echo $pass = $row['contrasena'];
	}
		
	if (isset($correo) && isset($contrasena)) {
		
	if($correo == $email && $contrasena == $pass) {
		session_start();
		$qrn=mysqli_query($conx,"SELECT * FROM estudiantes WHERE correo='$correo' AND contrasena='$contrasena'") or die("Error".mysqli_error($conx));
		while($re=mysqli_fetch_array($qrn)){
			$nomb = $re['nombre'];
			$correo = $re['correo'];
			$codigo = $re['id'];
			$contra = $re['contrasena'];
			$telf = $re['telefonof'];
			$telm = $re['telefonom'];
			$grado = $re['grado'];
			$rol = $re['rol'];
		}
		$_SESSION["logueado"] = TRUE;
		$_SESSION["nombre"] = $nomb;
		$_SESSION["correo"] = $correo;
		$_SESSION["codigo"] = $codigo;
		$_SESSION["contrasena"] = $contra;
		$_SESSION["telf"] = $telf;
		$_SESSION["telm"] = $telm;
		$_SESSION["grado"] = $grado;
		$_SESSION["rol"] = $rol;
		header("Location: VFO.php");
	}else{
		header("Location: index.php");
	}}
	mysqli_close($conx);	
	}
	if ($selc == "Profesor") {
		$conx = mysqli_connect("localhost","root","","colegio") or 
			die("Error".mysqli_error($conx));
	$query = mysqli_query($conx,"SELECT a.correo, a.contrasena FROM profesores a WHERE a.correo='$correo'AND a.contrasena ='$contrasena'") or 
			die("Error".mysqli_error($conx)); 
		while ($row = mysqli_fetch_array($query)){
		echo $email = $row['correo'];
		echo $pass = $row['contrasena'];

	}
		
	if (isset($correo) && isset($contrasena)){
	if($correo == $email && $contrasena == $pass) {
		session_start();
		$qrn=mysqli_query($conx,"SELECT * FROM profesores WHERE correo='$correo' AND contrasena='$contrasena'") or die("Error".mysqli_error($conx));
		while($re=mysqli_fetch_array($qrn)){
			$nomb = $re['nombre'];
			$correo = $re['correo'];
			$codigo = $re['id'];
			$contra = $re['contrasena'];
			$telf = $re['telefonof'];
			$telm = $re['telefonom'];
			$grado = $re['grado'];
			$rol = $re['rol'];
		}
		$_SESSION["logueado"] = TRUE;
		$_SESSION["nombre"] = $nomb;
		$_SESSION["correo"] = $correo;
		$_SESSION["codigo"] = $codigo;
		$_SESSION["contrasena"] = $contra;
		$_SESSION["telf"] = $telf;
		$_SESSION["telm"] = $telm;
		$_SESSION["grado"] = $grado;
		$_SESSION["rol"] = $rol;
		header("Location: VFO.php");
	}else{
		header("Location: index.php");
	}}
	mysqli_close($conx);	
	}
	if ($selc == "Acudiente") {
		$conx = mysqli_connect("localhost","root","","colegio") or 
			die("Error".mysqli_error($conx));
	$query = mysqli_query($conx,"SELECT a.correo, a.contrasena FROM padres a WHERE a.correo='$correo'AND a.contrasena ='$contrasena'") or 
			die("Error".mysqli_error($conx)); 
		while ($row = mysqli_fetch_array($query)){
		echo $email = $row['correo'];
		echo $pass = $row['contrasena'];
	}
	if (isset($correo) && isset($contrasena)) {
		
	if($correo == $email && $contrasena == $pass) {
		session_start();
		$qrn=mysqli_query($conx,"SELECT * FROM padres WHERE correo='$correo' AND contrasena='$contrasena'") or die("Error".mysqli_error($conx));
		while($re=mysqli_fetch_array($qrn)){
			$nomb = $re['nombre'];
			$correo = $re['correo'];
			$codigo = $re['id'];
			$contra = $re['contrasena'];
			$telf = $re['telefonof'];
			$telm = $re['telefonom'];
			$grado = $re['grado'];
			$rol = $re['rol'];
		}
		$_SESSION["logueado"] = TRUE;
		$_SESSION["nombre"] = $nomb;
		$_SESSION["correo"] = $correo;
		$_SESSION["codigo"] = $codigo;
		$_SESSION["contrasena"] = $contra;
		$_SESSION["telf"] = $telf;
		$_SESSION["telm"] = $telm;
		$_SESSION["grado"] = $grado;
		$_SESSION["rol"] = $rol;
		header("Location: VFO.php");
	}else{
		header("Location: index.php");
	}
	}
	mysqli_close($conx);	
	}
?>
</body>
</html>