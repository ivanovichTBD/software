<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-toggle/css/bootstrap2-toggle.min.css">
    <link rel="stylesheet" href="../node_modules/pageCSS/index.css">
    <link rel="stylesheet" href="../node_modules/pageCSS/Formulario.css">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../node_modules/popper.js/dist/popper.min.js"></script>
   
    <script src="validar.js"></script>
  
    <title>Document</title>
</head>
<body onload="generar()">
<script>
function generar() {
	   
	   	var caracteres = "abcdefghijkmnpqrtuvwxyzABCDEFGHIJKLMNPQRTUVWXYZ2346789";
  		var contraseña = "";
  		for (i=0; i<10; i++) contraseña += caracteres.charAt(Math.floor(Math.random()*caracteres.length));
  		
	document.getElementById("demo").innerHTML = contraseña;
	return contraseña;
}
</script>
<?php
			
   	
			
			if(!isset($_POST["bot_actualizar"])){
				require('datos_conexion.php');
		
		    $nro_ci=$_GET['ci'];
		
		
			$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
			
			if(mysqli_connect_errno()){
				echo "Fallo al conectar con la BD";
				exit();	
			}
	
			mysqli_select_db($conexion,$db_nombre) or die("No se encontro la BBDD");
			mysqli_set_charset($conexion,"utf8");
			
			$consulta="SELECT nombre,apellido,email,nomUsuario,ci,sexo,idrol,id FROM usuario,rol WHERE usuario.idrol=rol.idrol and ci=$nro_ci";
			$resultado=mysqli_query($conexion,$consulta);
			
			$filas=mysqli_fetch_row($resultado);
	
				$nombre=$filas[0];
				$apellido=$filas[1];
				$email=$filas[2];
				$nomUsuario=$filas[3];
				$ci=$filas[4];
				$sexo=$filas[5];
				$idrol=$filas[6];
				$id=$filas[7];
				
			}else{
				require("conexionPildoras.php");
				$Id=$_POST["id"];
				$nombre=$_POST["nombre"];
				$apellido=$_POST["apellido"];
				$nomUsuario=$_POST["nombreU"];
				$ci=$_POST["ci_press"];
				$sexo=$_POST["option"];	
				$rol=$_POST["id"];
				$sql="UPDATE usuario SET nombre=:miNom, apellido:miApe	email=:miEma,nomUsuario=:nomUsu, ci=:mi_ci, sexo=:sex WHERE id=:mi_id";
				$resultado=$base->prepare($sql);
				$resultado->execute(array(":mi_id"=>$Id,":miNom"=>$nombre,":miApe"=>$apellido,":miEma"=>$email,":nomUsu"=>$nomUsuario,":mi_ci"=>$ci,":sex"=>$sexo));
				header("Location:ConfiguracionUsuario.php");
			}
 ?>        


    <div class="container card">
    <form role="form">
            <div class="registro panel panel-default">
                    <div class="panel-body">
                      EDITAR
                    </div>
            </div>
       </form>     
            
       <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">    
            <div class="row">
               <input type="hidden" name="id" id="id" value="<?php echo $id ?>" > 
              <label class="qui" for ="email">Name</label>
               <input  type="text" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" value="<?php echo $nombre ?>"class="nombre form-control" name ="nombre" required>
            
            </div>
            
            
          <div class="row">
              <label class="erwin" for="email">Apellido</label>
              <input type="text"   pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" maxlength="30" value="<?php echo $apellido ?>" class="apellido form-control" name="apellido" required>
          </div>
          <div class="row">
                
              <label class="qui" for ="email">Nombre Usuario</label>
               <input  type="text" pattern="^([a-z]+[0-9]{0,2}){5,12}$" value="<?php echo $nomUsuario ?>" class="nombre form-control" name ="nombreU" required>
            
          </div>
                <div class="cin row">
                    <label class="erwin" for="number">CI</label>
                    <input type="text"  class="ci form-control"  id="ci_press" name="ci_press" value="<?php echo $ci ?>" required>
                    <div id ="error_ci"></div>
                </div>
                    	<div>
                            <lavel class="erwi" for="option">Sexo:</lavel>
                            <select class="ole"  name="option">
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
        <div class="row">
          <label class="erwin" for="email">Email:</label>
          <input type="email" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" class="email form-control" value="<?php echo $email ?>" name="email"required>
          
        </div>
       
        
       <lavel class="erwi" for="option">Rol:</lavel>
        <select class="ole" name="nomRol">
            <option value="Docente">Docente</option>
            <option value="Estudiante">Estudiante</option>"
        </select>
    	</div>

       	<div>
            <button class="ole submit" id="bot_actualizar" name="bot_actualizar" class="btn btn-primary">Guardar</button>
               
       	</div>
      </form>
      
      <a href="PaginaAdmi.php">
            <button class="cancela ole submit" class="btn btn-primary">Cancelar</button>
      </a>
</body>
</html>