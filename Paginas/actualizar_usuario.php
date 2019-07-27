<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

	require("datos_conexion.php");
	
	$usuario=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$nomUsuario=$_POST['nombreU'];
	$CI=$_POST['ci_press'];
	$sexo=$_POST['option'];
	$correo=$_POST['email'];
	$nomRoll=$_POST['nomRol'];
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
	
	if(mysqli_connect_errno()){
		echo "Fallo al conectar con la BD";
		exit();	
	}
	
	
	
	mysqli_select_db($conexion,$db_nombre) or die("No se encontro la BBDD");
	mysqli_set_charset($conexion,"utf8");
	
	$consulat_id_rol="SELECT idrol FROM rol WHERE rol=$nomRoll";
	
	$resultado=mysqli_query($conexion,$consulat_id_rol);
	
	$rol=mysqli_fetch_assoc($resultado);
	
    echo $rol['idrol'];
	
	
	
	/*
	
	
	$Consulta="UPDATE usuario SET
					nombre=$usuario,
					apellido=$apellido,
					ci=$CI,
					sexo=$sexo,
					correo=$correo,
					idrol=$idrol WHERE nomUsuario=$nomUsuario";
	
	mysqli_query($conexion,$Consulta);
	
	
	
	header('location:ConfiguracionUsuario.php');*/

 ?>
</body>
</html>