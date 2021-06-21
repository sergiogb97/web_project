<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Smartphones</title>
		<link rel="stylesheet" type="text/css" href="css/tree.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
		<script src="js/comunes.js"></script>
		<script src="js/eventos.js"></script>
		<script>
			/**
			  * Permite declarar un evento en JS antes de que la página se visualice.
			  *
			  * Creado por Sergio Garcia.
			  *
			  * @("login"): declara el evento para iniciar sesión.
			  *
			  * @("clicSO"): declara el evento para poder pinchar en los botones de sistema operativo.
			  *
			  * @("clicCleanSOs"): declara el evento para poder pinchar en el boton clean.
			  */
			$( function() {
				declararEvento( "login" );
				declararEvento( "clicSO" );
				declararEvento( "clicCleanSOs" );
			} );
		</script>
	</head>
	<body>
		<header>
			<div class="menu">
				<ul>
					<li><span>Tree</span></li>
					<li><a href='search.php'>Search</a></li>
					<li><a href='list.php'>List</a></li>
					<li><a href='admin.php'>Admin</a></li>
				</ul>
			</div>
			<?php
				/**
				  * Muestra por pantalla la información que contiene $divLogin, recibido del controlador.
				  *
				  * Creado por Sergio Garcia.
				  */
				echo $divLogin;
			?>
		</header>
		<main>
			<?php
				/**
				  * Muestra por pantalla la información que contiene $divSOs, recibido del controlador.
				  *
				  * Creado por Sergio Garcia.
				  */
				echo $divSOs;
			?>
		</main>
	</body>
</html>