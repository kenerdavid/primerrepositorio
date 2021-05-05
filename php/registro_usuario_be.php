<?php 
	include 'conexion_be.php';

	$Nombre_completo = $_POST['Nombre_completo'];
	$correo = $_POST['correo'];
	$usuario = $_POST['usuario'];
	$contraseña = $_POST['contraseña'];
	//ecriptamiento de contraseña 
	$contraseña = hash('sha512', $contraseña);

	$query = "INSERT INTO usuario(Nombre_completo, correo, usuario, contraseña) VALUES('$Nombre_completo', '$correo', '$usuario', '$contraseña')";
	//verificar que el correo  no se repita
	$verif_correo = mysqli_query($conexión, "SELECT * FROM usuario WHERE correo = '$correo'");
	if (mysqli_num_rows($verif_correo) > 0){
		echo "
			<script>
				alert('este correo ya ha sido registrado, intentelo nueva mente');
				window.location = '../index1.php';
			</script>
		";
		exit();
	}//verificar que el nombre de usuario no se repita
	$verif_usuario = mysqli_query($conexión, "SELECT * FROM usuario WHERE usuario = '$usuario'");
	if (mysqli_num_rows($verif_usuario) > 0){
		echo "
			<script>
				alert('este usuario ya ha sido registrado, itentelo nueva mente');
				window.location = '../index1.php';
			</script>
		";
		exit();
	}
	
	$activar = mysqli_query($conexión, $query);
	
	if ($activar) {
			echo"<script>
				alert('Usted ha sido registrado correctamente');
				window.location = '../index.php';
			</script>";
		}else{
			echo"<script>
				alert('Usted ha no ha sido registrado');
				window.location = '../index1.php';
			</script>";
		}


		mysqli_close($conexión);
 ?>