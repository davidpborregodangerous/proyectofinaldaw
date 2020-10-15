<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilosPagPrincipal.css">
		<title>WWE 2k21</title>
	</head>
	<body>
		<div id="cuerpo">
			<?php
				include 'html/header.html';
			?>
			<!-- Banner -->
			<div id="banner">
				<img alt="banner" src="gif/baner.gif">
				<button id="comprar" type="button">Comprar Ahora</button>
				<button id="sabermas" type="button">Saber más</button>
			</div>
			<!-- Noticias Recientes Carrusel -->
			<h1 id="seccion">Ultimas Noticias</h1>
			<div id="noticias">
			</div>
			
			<!-- Videos Recientes Carrusel -->
			<h1 id="seccion">Ultimos Vídeos</h1>
			<div id="videos">
			</div>
			
			<!-- Roster Carrusel -->
			<h1 id="seccion">Elige un/a Wrestler</h1>		
			<div id="roster">
			</div>
			
			<!-- Subcripcion en 2k -->		
			<div id="suscripcion">
			</div>
			<?php
			include 'html/footer.html';
			?>
		</div>
	</body>
</html>