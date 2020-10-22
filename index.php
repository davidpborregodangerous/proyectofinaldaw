<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilosPagPrincipal.css">
		<link href = "img/wwelogo.png" rel="icon" type="image/png">
		<title>WWE 2k21</title>
	</head>
	<body>
		<div id="cuerpo">
			<?php
				include 'html/header.html';
			?>
			<!-- Banner -->
			<div class="banner">
				<img alt="banner" src="gif/baner.gif">
				<button class="botoncico" id="comprar" type="button">COMPRAR AHORA</button>
			</div>
			
			<!-- Noticias -->
			<div class="banner banner2">
				<img alt="noticias" src="img/bannerNoticias.png">
			</div>
			<h1 class="seccion"><a href="php/noticias.php">Ver las Últimas Noticias</a></h1>
			
			<!-- Videos -->
			<div class="banner banner2">
				<img alt="videos" src="img/bannerVideos.png">
			</div>
			<h1 class="seccion"><a href="php/videos.php">Ver los Ultimos Vídeos</a></h1>
			
			<!-- Subcripcion en 2k -->		
			<div class="banner banner2">
				<img alt="suscripcion" src="img/bannerModos.png">
			</div>
			<h1 class="seccion"><a href="php/modos.php">Ver los Modos de Juego</a></h1>
			
			<!-- Roster -->
			<div class="banner banner2">
				<img alt="roster" src="img/bannerRoster.png">
			</div>
			<h1 class="seccion"><a href="php/roster.php">Ver el Roster</a></h1>		
			
			<!-- Subcripcion en 2k -->		
			<div class="banner banner2">
				<img alt="suscripcion" src="img/loginfondo.png">
			</div>
			<?php
			include 'html/footer.html';
			?>
		</div>
	</body>
</html>