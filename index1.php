<?php

	session_start();

	if (isset($_SESSION['usuario'])) {
		echo "<script>
		window.location = 'index.php';
	</script>";
	}	

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>registros</title>
	<link rel="stylesheet" href="css/estilo1.css">
	<link rel="shortcut icon" href="img/9.jpg" type="image/x-icon">
</head>
<body>
	<main>
		<div class="contenedor__todo">
			<div class="caja__trasera">
				<div class="caja__trasera-login">
					<h3>¿Ya tienes una cuenta?</h3>
					<p>iniciar sesión el la pagina</p>
					<button id="btn__iniciar-sesion">iniciar sesión</button>
				</div>
				<div class="caja__trasera-register">
					<h3>¿Aún no tienes una cuenta?</h3>
					<p>registrate para que puedas iniciar sesión</p>
					<button id="btn__registrarse">registrarse</button>
				</div>				
			</div>
			<div class="contenedor__login-register">
				<form action="php/login_usuario_be.php" method="POST" class="formulario__login">
					<h2>iniciar sesión</h2>
					<input type="text" placeholder="correo electrónico " name="correo">
					<input type="password" placeholder="contraseña" name="contraseña">
					<button>Entrar</button>
				</form>
				<form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
					<h2>Registrarse</h2>
					<input type="text" placeholder="Nombre completo" name="Nombre_completo">
					<input type="text" placeholder="Correo Electrónico" name="correo">
					<input type="text" placeholder="usuario" name="usuario">
					<input type="password" placeholder="contraseña" name="contraseña">
					<button>Registarse</button>				
				</form>
			</div>			
		</div>
	</main>
	<script src="js/script.js"></script>
</body>
</html>