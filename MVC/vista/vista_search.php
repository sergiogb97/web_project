<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Smartphones</title>
		<link rel="stylesheet" type="text/css" href="css/search.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
			  * @("keyPressSearch"): declara el evento para poder realizar una búsqueda.
			  */
			$( function() {
				declararEvento( "login" );
				declararEvento( "keyPressSearch" );
			} );
		</script>
	</head>
	<body>
		<header>
			<div class="menu">
				<ul>
					<li><a href='tree.php'>Tree</a></li>
					<li><span>Search</span></li>
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
			<div class="busqueda">
				<div class="campobusqueda">
					<input type="text" placeholder="Aquí tu búsqueda" />
				</div>
			</div>
		</main>
	</body>
</html>