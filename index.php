<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilosPagPrincipal.css">
		<link href="img/wwelogo.png" rel="icon" type="image/png">
		<title>WWE 2k21</title>
	</head>
	<body>
		<?php
			include 'html/header.html';
		?>
		<nav id="fondoCuerpo">
			<nav id="cuerpo">
				<!-- Banner -->
				<div class="banner">
					<img alt="banner" src="gif/baner.gif">
					<a href="php/comprarreservar.php" class="botoncico" id="comprar" type="button">RESERVAR AHORA</a>
				</div>
				
				<!-- Noticias -->
				<div class="banner banner2">
					<a href="php/noticias.php"><img alt="noticias" src="img/bannerNoticias.png"></a>
				</div>
				
				<!-- Videos -->
				<div class="banner banner2">
					<a href="php/videos.php"><img alt="videos" src="img/bannerVideos.png"></a>
				</div>
				
				<!-- Modos de juego -->		
				<div class="banner banner2">
					<a href="php/modos.php"><img alt="suscripcion" src="img/bannerModos.png"></a>
				</div>
				
				<!-- Roster -->
				<div class="banner banner2">
					<a href="php/roster.php"><img alt="roster" src="img/bannerRoster.png"></a>
				</div>
			</nav>
		</nav>
		<?php
			include 'html/footer.html';
		?>
	</body>
</html>