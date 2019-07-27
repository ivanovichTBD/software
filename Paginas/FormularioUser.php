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
        

    <div class="container card">
    <form role="form">
            <div class="registro panel panel-default">
                    <div class="panel-body">
                      REGISTRO
                    </div>
            </div>
       </form>     
            
       <form action="guardar_usuario.php" method="post">    
            <div class="row">
                
              <label class="qui" for ="email">Name</label>
               <input   type="text" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}" class="nombre form-control" name ="nombre" required>
            
            </div>
            
            
          <div class="row">
              <label class="erwin" for="email">Apellido</label>
              <input type="text"  pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,64}" class="apellido form-control" name="apellido" required>
          </div>
          <div class="row">
                
              <label class="qui" for ="email">Nombre Usuario</label>
               <input   type="text" pattern="^([a-z]+[0-9]{0,2}){5,12}$" class="nombre form-control" name ="nombreU" required>
            
          </div>
                <div class="cin row">
                    <label class="erwin" for="number">CI</label>
                    <input type="text"  class="ci form-control"  id="ci_press" name="ci_press" required>
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
          <input type="email" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" class="email form-control" name="email"required>
          
        </div>
        <div>
       <lavel class="erwi" for="option">Rol:</lavel>
        
        <select class="ole" name="nomRol">
            <option value="Docente">Docente</option>
            <option value="Estudiante">Estudiante</option>"
        </select>
    	
        </div>
        
       	<div>
        <a href="ConfiguracionUsuario.php">
           <button class="ole submit" class="btn btn-primary">Guardar</button>  </a> 
       	</div>
        
      </form>
      
      <a href="PaginaAdmi.php">
            <button class="cancela ole submit" class="btn btn-primary">Cancelar</button>
      </a>
</body>
</html>