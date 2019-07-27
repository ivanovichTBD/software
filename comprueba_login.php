<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php


try{

		$base=new PDO("mysql:host=localhost; dbname=prueba","root","");
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql="SELECT * FROM usuarios_pass WHERE USUARIO= :login AND PASSWORD= :password";
		$resultado=$base->prepare($sql);
		$login=htmlentities(addslashes($_POST["login"]));
		$password=htmlentities(addslashes($_POST["password"]));
		
		$resultado->bindValue(":login", $login);
		$resultado->bindValue(":password", $password);
		$resultado->execute();
		$numero_registro=$resultado->rowCount();
		if($numero_registro!=0)
		{
			session_start();
			
			$_SESSION["usuario"]=$_POST["login"];
			
			header("location:Paginas/PaginaAdmi.php");
			
		}else
		{
			header("location:software.php");
		}
}catch(Exception $e){
	die("Error:". $e->getMessage());
}


?>
</body>
</html>