<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/estilosPagPrincipal.css">
		<link href = "../img/wwelogo.png" rel="icon" type="image/png">
		<script type="text/javascript" src="../js/dependedeopcion.js"></script>
		<title>Reserva</title>
	</head>
	<body>
		<div id="cuerpo">
			<?php
				include '../html/header.html';
			?>
			<!-- Noticias Recientes Carrusel -->
			<h1 class="seccion2">Resérvalo</h1>
			<div id="reserva">
				<h1>WWE 2K21: CONVIERTETE EN LEYENDA</h1>
				<img src="../img/cover.jpg">
				<br/>
				
				<?php
					if(isset($_POST['reservar'])){
						if(empty($_POST['nombrecomple'])){
							$errores[]= "El nombre es obligatorio, mortal";
						}
						if (empty($_POST['clave']) || strlen($_POST['clave'])<5) {
							$errores[]="la contraseña es obligatoria y debe tener más de 5 caracteres, mortal";
						}
					}
					if (isset($_POST['reservar']) && empty($errores)) {
						if($_POST['formato']=="fisico"){
							if($_POST['console']=="ps4"){
								if($_POST['version']=="standard"){
									if($_POST['tienda']=="game"){
										header("Location: https://www.game.es/wwe-2k20-playstation-4-171189");
									}else if($_POST['tienda']=="amazon"){
										header("Location: https://www.amazon.es/Take-Two-Interactive-Spain-2k20/dp/B07WLM71F7");
									}else if($_POST['tienda']=="fnac"){
										header("Location: https://www.fnac.es/WWE-2K20-PS4-Juego-PS4/a6887328");
									}else if($_POST['tienda']=="mediamark"){
										header("Location: https://www.mediamarkt.es/es/product/_ps4-wwe-2k20-1459189.html");
									}else if($_POST['tienda']=="2kstore"){
										header("Location: https://store.2k.com/es-419/game/buy-wwe-2k20");
									}else if($_POST['tienda']=="xtralife"){
										header("Location: https://www.xtralife.com/producto/wwe-2k20-ps4-estandar/61713");
									}
								}else if($_POST['version']=="collector"){
									if($_POST['tienda']=="game"){
										header("Location: https://www.game.es/wwe-2k20-edicion-coleccionista-playstation-4-171185");
									}else if($_POST['tienda']=="amazon"){
										header("Location: https://www.amazon.es/Take-Two-Interactive-Spain-2K20/dp/B07W6R11VY");
									}else if($_POST['tienda']=="fnac"){
										header("Location: https://www.fnac.es/WWE-2K20-Collector-s-Edition-PS4-Juego-PS4/a6887299");
									}else if($_POST['tienda']=="mediamark"){
										header("Location: https://www.mediamarkt.es/es/product/_ps4-wwe-2k20-collector-edition-1462081.html");
									}else if($_POST['tienda']=="2kstore"){
										header("Location: https://store.2k.com/en/game/buy-wwe-2k20#compare-editions");
									}else if($_POST['tienda']=="xtralife"){
										header("Location: https://www.xtralife.com/producto/wwe-2k20-edicion-coleccionista-ps4-coleccionista/61717");
									}
								}
							}else if($_POST['console']=="xboxone"){
								if($_POST['version']=="standard"){
									if($_POST['tienda']=="game"){
										header("Location: https://www.game.es/wwe-2k20-xbox-one-171190");
									}else if($_POST['tienda']=="amazon"){
										header("Location: https://www.amazon.es/Take-Two-Interactive-Spain-2K20/dp/B07WLM6DMQ");
									}else if($_POST['tienda']=="fnac"){
										header("Location: https://www.fnac.es/WWE-2K20-Xbox-One-Juego-Xbox-One/a6887334");
									}else if($_POST['tienda']=="mediamark"){
										header("Location: https://www.mediamarkt.es/es/product/_xbox-one-wwe-2k20-1459190.html");
									}else if($_POST['tienda']=="2kstore"){
										header("Location: https://store.2k.com/es-419/game/buy-wwe-2k20");
									}else if($_POST['tienda']=="xtralife"){
										header("Location: https://www.xtralife.com/producto/wwe-2k20-xbox-one-estandar/61714");
									}
								}else if($_POST['version']=="collector"){
									if($_POST['tienda']=="game"){
										header("Location: https://www.game.es/wwe-2k20-edicion-coleccionista-xbox-one-171186");
									}else if($_POST['tienda']=="amazon"){
										header("Location: https://www.amazon.es/Take-Two-Interactive-Spain-2K20/dp/B07WLM6DMQ");
									}else if($_POST['tienda']=="fnac"){
										header("Location: https://www.fnac.es/WWE-2K20-Collector-s-Edition-Xbox-One-Juego-Xbox-One/a6887322");
									}else if($_POST['tienda']=="mediamark"){
										header("Location: https://www.mediamarkt.es/es/product/_xbox-one-wwe-2k20-collector-edition-1462082.html");
									}else if($_POST['tienda']=="2kstore"){
										header("Location: https://store.2k.com/en/game/buy-wwe-2k20#compare-editions");
									}else if($_POST['tienda']=="xtralife"){
										header("Location: https://www.xtralife.com/producto/wwe-2k20-edicion-coleccionista-xbox-one-coleccionista/61718");
									}
								}
							}
						}else if($_POST['formato']=="digital"){
							if($_POST['console']=="ps4"){
								header("Location: https://store.playstation.com/es-es/product/EP1001-CUSA15765_00-WWE2K20MAINSKU02");
							}else if($_POST['console']=="xboxone"){
								if($_POST['version']=="standard"){
									header("Location: https://www.microsoft.com/es-es/p/wwe-2k20/9nqcsr9jrtz6?activetab=pivot:overviewtab");
								}else if($_POST['version']=="collector"){
									header("Location: https://www.microsoft.com/es-es/p/edicion-deluxe-de-wwe-2k20/9pm1b7w61hdx");
								}
							}else if($_POST['console']=="pc"){
								header("Location: https://store.steampowered.com/app/1015500/WWE_2K20/");
							}
						}
					}else{
				?>
					<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="reserva">
						<!-- <div id="idioma">
							<h2>IDIOMA:</h2>
							<select name="idioma">
								<option>Alemania</option>
								<option>Argentina</option>
								<option>Australia</option>
								<option>Austria</option>
								<option>Bélgica</option>
								<option>Belice</option>
								<option>Brazil</option>
								<option>Bulgaria</option>
								<option>Canada</option>
								<option>Chile</option>
								<option>Croacia</option>
								<option>Chipre</option>
								<option>Dinamarca</option>
								<option>Eslovaquia</option>
								<option>Eslovenia</option>
								<option selected>España</option>
								<option>Estados Unidos</option>
								<option>Estonia</option>
								<option>Finlandia</option>
								<option>Francia</option>
								<option>Grecia</option>
								<option>Hong Kong</option>
								<option>Hungría</option>
								<option>India</option>
								<option>Indonesia</option>
								<option>Irlanda</option>
								<option>Isreal</option>
								<option>Italia</option>
								<option>Japón</option>
								<option>Korea</option>
								<option>Letonia</option>
								<option>Letonia</option>
								<option>Lituania</option>
								<option>Letonia</option>
								<option>Luxemburgo</option>
								<option>Malasia</option>
								<option>Malta</option>
								<option>México</option>
								<option>Países Bajos</option>
								<option>Nueva Zelanda</option>
								<option>Noruega</option>
								<option>Perú</option>
								<option>Polonia</option>
								<option>Portugal</option>
								<option>Reino Unido</option>
								<option>República Checa</option>
								<option>República Eslocava</option>
								<option>Rusia</option>
								<option>Singapur</option>
								<option>Suecia</option>
								<option>Suiza</option>
								<option>Sur África</option>
								<option>Taiwán</option>
								<option>Tailandia</option>
								<option>Ucrania</option>
							</select>
						</div>-->
						
						<div id="formato">
							<h2>FORMATO:</h2>
							<label class="textLabel">FÍSICO<input type="radio" id="fisico" name="formato" value="fisico"></label>
							<label class="textLabel">DIGITAL<input type="radio" id="digital" name="formato" value="digital"></label>
						</div>
						<br/>
						
						<div id="consola">
							<h2>ELIGE LA PLATAFORMA:</h2>
							<label class="textLabel" id="labelParaPS4">PS4<input type="radio" id="ps4" name="console" value="ps4"></label>
							<label class="textLabel" id="labelParaXBOX">XBOX ONE<input type="radio" id="xboxone" name="console" value="xboxone"></label>
							<span id="labelParaPC"></span>
						</div>
						<br/>
						
						<div id="version">
							<h2>VERSIÓN:</h2>
							<label class="textLabel">ESTÁNDAR<input type="radio" id="standard" name="version" value="standard"></label>
							
							<label class="textLabel">COLECCIONISTA<input type="radio" id="collector" name="version" value="collector"></label>
						</div>
						<br/>
						<p><b>*Contenido de la versión Estándar:</b></p>
						<ul>
						  <li>Una copia del videojuego WWE 2k21.</li>
						  <li>Acelerante.</li>
						  <li>Cartas de edición limitada para WWE SuperCard, con todas las versiones de Undertaker (solo en las ediciones físicas).</li>
						</ul>
						<br/>
						<p><b>*Contenido de la versión Coleccionista:</b></p>
						<ul>
						  <li>Una copia del videojuego WWE 2k21 en su formato de Edición Coleccionista.</li>
						  <li>Una figura realista de Undertaker.</li>
						  <li>Acelerante.</li>
						  <li>Obra coleccionable en acrílico con un autográfo de Undertaker.</li>
						  <li>Disco con el documental de The Last Ride protagonizada por Taker.</li>
						  <li>Inicio rápido de Mi JUGADOR de WWE 2k21.</li>
						  <li>Cartas de edición limitada para WWE SuperCard, con todas las versiones de Undertaker (solo en las ediciones físicas).</li>
						</ul>
						<div id="tienda">
							<h2>TIENDA:</h2>
							<label class="textLabel">GAME<input type="radio" id="game" name="tienda" value="game"></label>
							<label class="textLabel">AMAZON<input type="radio" id="amazon" name="tienda" value="amazon"></label>
							<label class="textLabel">FNAC<input type="radio" id="fnac" name="tienda" value="fnac"></label>
							<label class="textLabel">MEDIA MARK<input type="radio" id="mediamark" name="tienda" value="mediamark"></label>
							<label class="textLabel">2K STORE<input type="radio" id="2kstore" name="tienda" value="2kstore"></label>
							<label class="textLabel">XTRALIFE<input type="radio" id="xtralife" name="tienda" value="xtralife"></label>
						</div>
						<br/>
						
						<div id="tiendaonline">
						</div>
						<br/>
						<input type="submit" name="reservar" value="RESERVAR">
					</form>
				<?php
						if(isset($errores)){
							foreach ($errores as $error) {
								echo "$error<br/>";
							}
						}
					}
				?>
			</div>
			<?php
			include '../html/footer.html';
			?>
		</div>
	</body>
</html>