<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.css">
	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="node_modules/pageCSS/principal.css">


</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
			<div class="brand_logo_container">
					<img src="ImgFondos/Img-inicioUser.jpg" class="brand_logo pt-5" alt="Logo">
				</div>
		<div class="card">
			
			<div class="card-header">
				<h3>Iniciar Sesion</h3>
				
			</div>
						
			<div class="card-body">
				
				<form action="comprueba_login.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="login"  required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password" required>
					</div>
					
					<div class="form-group">
						<input type="submit" value="Login" class="btn login_btn">
					</div>
				</form>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>