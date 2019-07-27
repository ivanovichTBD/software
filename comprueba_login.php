<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>

<?php
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
			
			$consulta="SELECT nomUsuario,contraseña FROM usuario,rol WHERE usuario.idrol=rol.idrol and rol='Administrador'";
			$resultado=mysqli_query($conexion,$consulta);
			
			$filas=mysqli_fetch_row($resultado);
			
			echo $filas[0];			
		if($_POST['login']==$filas[0] && $_POST['password']==$filas[1])
		{
			session_start();
			
			$_SESSION["usuario"]=$_POST["login"];
			
			header("location:Paginas/PaginaAdmi.php");
			
		}else
		{
			header("location:software.php");
		}

	

?>
</body>
</html>