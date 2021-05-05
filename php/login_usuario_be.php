<?php  
	
	session_start();

	include 'conexion_be.php';

	$correo = $_POST['correo'];
	$contraseña = $_POST['contraseña'];
	$contraseña = hash('sha512', $contraseña);


	$valid_login = mysqli_query($conexión, "SELECT * FROM usuario WHERE
		correo = '$correo' and contraseña = '$contraseña'");
	if (mysqli_num_rows($valid_login) > 0) {
		$_SESSION['usuario'] = $correo;
		header("location: ../index1.php");
		exit;
	}else{
		echo "
			<script>
				alert('usuario no existe, porfavor verifique los datos ingresado');
				window.location = '../index1.php';
			</script>
		";
		exit();
	}
?>