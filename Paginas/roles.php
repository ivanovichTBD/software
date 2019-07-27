<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../node_modules/pageCSS/roles.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-toggle/css/bootstrap2-toggle.min.css">
    <link rel="stylesheet" href="../node_modules/pageCSS/BotonesLetras.css">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../node_modules/popper.js/dist/popper.min.js"></script>
    
</head>
<body>
        <div class="card">   
                              
           <div class="clasificacion row mb-3 ">
                <div style="width: 109%" class="row justify-content-center mt-3 ">
                    LISTA DE ROLES Y USUARIOS
                </div>
                <div class="docente mb-2">   
                       ESTUDIANTE
                </div>
                    <div  class="estudiante mb-2">   
                       DOCENTE
                    </div>
                
  
            </div>
            <div class="row ml-3">
                
            
            <div  class="col-4">   
            <table class="table table-striped table-light table-responsive">
                <thead>
                 
                  <tr>
                    <th scope="col">Nro</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    </tr>
                </thead>
                <tbody>
               	<?php 
					require('datos_conexion.php');
					$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
					if(mysqli_connect_errno()){
							echo "Fallo al conectar con la BD";
							exit();	
					}
	
					mysqli_select_db($conexion,$db_nombre) or die("No se encontro la BBDD");
					mysqli_set_charset($conexion,"utf8");
					$Consulta="SELECT id,nombre,apellido FROM usuario,rol WHERE usuario.idrol=rol.idrol and rol='Estudiante'";
					$resultado= mysqli_query($conexion,$Consulta);
					$cont=1;
					while($fila=mysqli_fetch_row($resultado)){
							
						echo "<tr>";
                    	echo "<td>$cont</td>";
                    	echo "<td>$fila[1]</td>";
                    	echo "<td>$fila[2]</td>";
                    	echo "</tr>";
						$cont++;
					}
					
					
				?>
                
				</tbody>
              </table>
            </div> 

            <button class="bontonRegistrar menu" class="btn btn-primary ">MENÚ</button>
            
            
            <div  class="col-4">   
                <table class="table table-light table-striped table-responsive">
                    <thead>
                      <tr>
                        <th scope="col">Nro</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
							require('datos_conexion.php');
							$conexion2=mysqli_connect($db_host,$db_usuario,$db_contra);
							if(mysqli_connect_errno()){
									echo "Fallo al conectar con la BD";
									exit();	
							}
			
							mysqli_select_db($conexion2,$db_nombre) or die("No se encontro la BBDD");
							mysqli_set_charset($conexion2,"utf8");
							$Consulta2="SELECT id,nombre,apellido FROM usuario,rol WHERE usuario.idrol=rol.idrol and rol='Docente'";
							$resultado2= mysqli_query($conexion2,$Consulta2);
							$cont2=1;
							while($fila2=mysqli_fetch_row($resultado2)){
									
								echo "<tr>";
								echo "<td>$cont2</td>";
								echo "<td>$fila2[1]</td>";
								echo "<td>$fila2[2]</td>";
								echo "</tr>";
								$cont2++;
							}
							
						?>
                    </tbody>
                  </table>
                </div> 
                    
            
        </div>
 
    
        
</body>
</html>