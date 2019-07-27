<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php 
   
    $usuario=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$nomUsuario=$_POST['nombreU'];
	$CI=$_POST['ci_press'];
	$sexo=$_POST['option'];
	$correo=$_POST['email'];
	$nomRoll=$_POST['nomRol'];
	$id=$_POST['id'];
	echo $id;
  

             $db_host="localhost";
			$db_nombre="basedatos";
			$db_usuario="root";
			$db_contra="";
			
			$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
			
			if(mysqli_connect_errno()){
				echo "Fallo al conectar con la BD";
				exit();	
			}
	
			mysqli_select_db($conexion,$db_nombre) or die("No se encontro la BBDD");
			mysqli_set_charset($conexion,"utf8");
			
			$consulta="UPDATE usuario set nombre='$usuario',apellido='$apellido',email='$correo',nomUsuario='$nomUsuario',ci='$CI',sexo='$sexo' where id='$id'";
			$resultado=mysqli_query($conexion,$consulta);
			header('location:ConfiguracionUsuario.php');
    

?>




</body>
</html>