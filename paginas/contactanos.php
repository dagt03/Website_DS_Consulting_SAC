<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>DS Consulting SAC - Contáctanos</title>
	<link rel="stylesheet" href="../css/contactanos.css">
	<style type="text/css">
	body {
    background-image: url(../img/wp.jpeg);
    background-repeat: no-repeat;
    background-size: cover;
    margin-left: 100px;
    margin-top: 20px;
    margin-right: 100px;
    margin-bottom: 20px;
}
    </style>
</head>

<body>
	<!--CABECERA-->
	<header class="cabecera">
		<section class="logo">
			<img src="../img/DS Consulting SAC Logo.jpg" alt="Logo">
			
		</section>
		<nav class="menu">
		<ul>
			<li><a href="#"><a href="../index.html">INICIO</a></a></li>
			<li><a href="#"><a href="../paginas/nosotros.html">NOSOTROS</a></a></li>
			<li><a href="#"><a href="#">CONTÁCTANOS</a></a></li>
		</ul>
			
		</nav>
</header>
	
	<!--CUERPO-->
	<main class="contenido">
		<section class="contact">
			<div class="contact-section">
			
				<h1>Contáctanos</h1>
				<div class="border"></div>
				
				
				
				<form class="contact-form" method="post">
					
			
					
					<!--NOMBRE-->
					<input type="text" class="contact-form-text" placeholder="Nombre" name="name" required>
					
					<!--EMAIL-->
					<input type="email" class="contact-form-text" placeholder="Correo electrónico" name="correo" required>
					
					<!--ASUNTO-->
					<input type="text" class="contact-form-text" placeholder="Teléfono" name="telefono" required>
					
					<!--MENSAJE-->
					<textarea class="contact-form-text" placeholder="Escriba aquí su mensaje" name="mensaje" required></textarea>
					
					<!--ENVIAR-->
					<input type="submit" class="contact-form-btn" id="boton" name="enviar">
					
						
				</form>
				
				<?php
					include("correo.php");
				?>
					
			</div>
						
		</section>
		
	</main>
	
	<!--PIE DE PÁGINA-->
	<footer class="piedepagina">
		<article class="piedepagina1">
			<p>Derechos Reservados © DS Consulting 2020</p>
		</article>
		
	</footer>
	
</body>
</html>