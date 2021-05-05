<?php 

	session_start();
	if (!isset($_SESSION['usuario'])) {
	echo "<script>
		alert('Por favor debes inicar sesión');
		window.location = 'index1.php';
	</script>";
	session_destroy();
	}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bellza stephany</title>
	<link rel="shortcut icon" href="img/9.jpg" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="iconos/css/fontello.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/menu.css">
</head>
<body style="background: rgba(190, 46, 221,.2)">

	<nav class="navbar navbar-expand-lg">
  <div class="container-a">
  	 <a class="navbar-brand" href="#">
    	<img src="img/3.jpg" style="width: 6% " class="img-logo"> 
    	<input type="checkbox" id="check">
    	<label for="check" class="icon-menu"></label>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php" style="background: rgba(126, 214, 223,1.0); color: white">inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="servicios.php">sevicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactanos.php" >contactanos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="php/cerrar_sesion.php" >cerrar sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header class="main-header">
	<div class="background-overlay text-white py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-center text-center">
					<h1>Bellza Stephany</h1>
					<p><p>Somos una empresa orgullosamente Córdobesa, dedicada a satisfacer las necesidades de la mujer actual, mediante la elaboración de cosméticos 100% naturales especializándonos en pieles sensibles. <br> </p>
					<a href="#" class="btn btn-outline-secondary btn-lg text-white">
						Read More
					</a>
				</div>
				<div class="col-md-6">
					<!--<img src="img/8.jpg" class="img-fluid" style="width: 80%">-->
				</div>
				
			</div>
			
		</div>
		
	</div>
</header>
<main>
	<h4 class="h1 mision">¿Qué es la belleza?</h4>
	<p class="muevete">
		Belleza es una noción abstracta ligada a numerosos aspectos de la existencia humana. La belleza se estudia dentro de la disciplina filosófica de la estética, además de otras disciplinas como la historia, la sociología y la psicología social. Vulgarmente, la belleza se define como la característica de una cosa que a través de una experiencia sensorial (percepción) procura una sensación de placer o un sentimiento de satisfacción. Proviene de manifestaciones tales como la forma, el aspecto visual, el movimiento y el sonido, aunque también se la asocia, en menor medida, a los sabores y los olores. En esta línea y haciendo hincapié en el aspecto visual, Tomás de Aquino define lo bello como aquello que agrada a la vista (quae visa placet). <br><br>

		La percepción de la «belleza» a menudo implica la interpretación de alguna entidad que está en equilibrio y armonía con la naturaleza, y puede conducir a sentimientos de atracción y bienestar emocional. Debido a que constituye una experiencia subjetiva, a menudo se dice que «la belleza está en el ojo del observador».1​ Aunque tal relativismo es exagerado y suele asociarse a cosmovisiones y modas, lo concreto es que existen objetos y seres que dan la impresión de belleza ya desde su objetividad natural porque se corresponden con los requisitos naturales del homo sapiens, por ejemplo: el sabor dulce es preferido al sabor amargo porque el amargo suele corresponder a tóxicos, lo mismo que la fragancia de muchas flores se prefiere naturalmente en gente psíquicamente sana al hedor pútrido. <br> <br> <br><br>


	</p>
	<h1 class="mision">Misión</h1>
	<p class="muevete">Comercializar productos cosméticos altamente competitivos en calidad y precio, manteniendo altos estándares en los procesos de elaboración, tambien buscamos Satisfacer las necesidades de belleza de nuestros clientes mediante servicios de excelencia en calidad, brindado por personal altamente profesional que inspira confianza y seriedad, permitiéndonos superar las expectativas de nuestros clientes.</p>
</main>
<section class="container mision muevete text-center p-5">
	<div class="container mision muevete p-5">
		<h5>Nuetros productos</h5>
		Aromacense&reg <br> depilex&reg 	shock&reg	nutrit&reg
		Arrurru Natural&reg <br> free Spirit&reg	squiash&reg		menticol&reg
		Bioherbal&reg	Free Style&reg 	mundial&reg		menticol&reg

	</div>
</section>
<footer>
	<h6 class="letra">
 	Todos nuestros productos cuentan con la aprobación de elaboración de la SSA en Colombia; lo cuál nos permite, transferirle a todos nuestros clientes la confianza de adquirir productos con los más altos estándares de calidad. &copy:Stephafy. </h6>
</footer>


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>