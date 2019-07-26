<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
	include("generarContrasena.php");
	require("datos_conexion.php");
	
	
	$usuario=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$nomUsuario=$_POST['nombreU'];
	$CI=$_POST['ci_press'];
	$sexo=$_POST['option'];
	$correo=$_POST['email'];
	$password=generar();
	
	$nomRol=$_POST['nomRol'];
	
	$encriptado=password_hash($password, PASSWORD_DEFAULT);
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
	
	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la BD";
		exit();	
	}
	
	mysqli_select_db($conexion,$db_nombre) or die("No se encontro la BBDD");
	mysqli_set_charset($conexion,"utf8");
	
	$Consulta="SELECT * FROM rol WHERE rol='$nomRol'";
	
	$resultado= mysqli_query($conexion,$Consulta);
	
	$fila=mysqli_fetch_row($resultado);
	
	$nroRol=$fila[0];
	
	
	
	
	
	
	
	
	$consultar="INSERT INTO usuario (nombre,apellido,email,nomUsuario,ci,sexo,contraseña,idrol)  	     VALUES ('$usuario', '$apellido', '$correo','$nomUsuario','$CI','$sexo','$encriptado','$nroRol')";
	mysqli_query($conexion,$consultar);
	
	
?>
</body>
</html>