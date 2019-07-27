<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-toggle/css/bootstrap2-toggle.min.css">
    <link rel="stylesheet" href="../node_modules/pageCSS/confUser.css">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../node_modules/popper.js/dist/popper.min.js"></script>
    <title>Document</title>

   
</head>
<body>
    <header class="text-center " id="title">
        
        USUARIOS
    </header>
    <nav class="row justify-content-center mt-3 mb-3">
        <a href="FormularioUser.php">
        <button class="boton" type="submit" > Crear usuarios</button></a>
         <p> 
        </nav>
        
        <div class="tamanoTabla row">
           <a href="PaginaAdmi.php">
            <button class="boton"  type="submit">volver</button></a>
    

            <table class=" table table-bordered col-8 ml-5">
          <thead class="thead-dark">
            <th>Nro</th>
            <th>Nombre </th>
            <th>CI</th>
            <th>Rol</th>
            <th>Modificar</th>
            <th>eliminar </th>
            <th>permisos</th>
          </thead>
          <tbody class="tablita"  >
            <tr >
            
            
               	<?php 
					require('datos_conexion.php');
					$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
					if(mysqli_connect_errno()){
							echo "Fallo al conectar con la BD";
							exit();	
					}
	
					mysqli_select_db($conexion,$db_nombre) or die("No se encontro la BBDD");
					mysqli_set_charset($conexion,"utf8");
					$Consulta="SELECT nombre,ci,rol FROM usuario,rol WHERE usuario.idrol=rol.idrol";
					$resultado= mysqli_query($conexion,$Consulta);
					$cont=1;
					while($fila=mysqli_fetch_row($resultado)){
							
						echo "<tr>";
                    	echo "<td>$cont</td>";
                    	echo "<td>$fila[0]</td>";
                    	echo "<td>$fila[1]</td>";
						echo "<td>$fila[2]</td>";
               
						
						$cont++;
						
						print "<td> <a href='EditarUsuario.php?ci=".$fila[1]."'> <button>EDITAR</button></a> </td>
                		<td> <a href='eliminiarUsuario.php?ci=".$fila[1]."'> <button>ELIMINAR</button></a></td>
                		<td><a href='permisos.php?rol=".$fila[2]."'><button>PERMISOS</button></a></td>";
					}
					
					
	
               
                ?>
            </tr>
             </tbody>
      </table>
    </div>
    </body>
</html>