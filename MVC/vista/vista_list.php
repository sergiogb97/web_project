<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Smartphones</title>
		<link rel="stylesheet" type="text/css" href="css/list.css">
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
			  * @("clicPag"): declara el evento para poder cambiar de página.
			  */
			$( function() {
				declararEvento( "login" );
				declararEvento( "clicPag" );
			} );
		</script>
	</head>
	<body>
		<header>
			<div class="menu">
				<ul>
					<li><a href='tree.php'>Tree</a></li>
					<li><a href='search.php'>Search</a></li>
					<li><span>List</span></li>
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
			<div class="select">
				<select name="items" onchange="selectItems( this );">
					<option value="2">2</option>
					<option value="4">4</option>
					<option value="6">6</option>
				</select>
			</div>
			<div class="list">
				<div class="sublist">
					<?php
						/**
						  * Muestra por pantalla la información que contiene $listModelos, recibido del controlador.
						  *
						  * Creado por Sergio Garcia.
						  */
						echo $listModelos;
					?>
				</div>
			</div>
		</main>
	</body>
</html>