<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php 
	$ci=$_GET['ci'];
	
	
		require('datos_conexion.php');
		$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
		if(mysqli_connect_errno()){
				echo "Fallo al conectar con la BD";
				exit();	
		}
	
		mysqli_select_db($conexion,$db_nombre) or die("No se encontro la BBDD");
		mysqli_set_charset($conexion,"utf8");
		$Consulta="DELETE from usuario WHERE ci=$ci";
		mysqli_query($conexion,$Consulta);
		
		header('location:ConfiguracionUsuario.php');	
?>
</body>
</html>