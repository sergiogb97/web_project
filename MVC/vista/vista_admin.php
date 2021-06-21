<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Smartphones</title>
		<link rel="stylesheet" type="text/css" href="css/admin.css">
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
			  * @("cpData"): declara el evento que recoge el id del modelo que se quiere borrar.
			  *
			  * @("borrarCampo"): declara el evento para poder borrar un modelo.
			  *
			  * @("removeOcult"): declara el evento para poder ver el formulario que inicialmente está oculto.
			  *
			  * @("getFormulario"): declara el evento para recoger el formulario en función de si es un insert o un update.
			  */
			$( function() {
				declararEvento( "login" );
				declararEvento( "cpData" );
				declararEvento( "borrarCampo" );
				declararEvento( "removeOcult" );
				declararEvento( "getFormulario" );
			} );
		</script>
	</head>
	<body>
		<header>
			<div class="menu">
				<ul>
					<li><a href='tree.php'>Tree</a></li>
					<li><a href='search.php'>Search</a></li>
					<li><a href='list.php'>List</a></li>
					<li><span>ADMIN</span></li>
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
		<div class="table">
			<table>
				<thead>
					<tr>
						<th>Modelo</th>
						<th>Año</th>
						<th>Alto</th>
						<th>Ancho</th>
						<th>Grosor</th>
						<th>Peso</th>
						<th>Bateria</th>
						<th>Multisim</th>
						<th>SD</th>
						<th>Jack</th>
						<th>Tipo sim</th>
						<th>Procesador</th>
						<th>Familia</th>
						<th>Borrar</th>
					</tr>
				</thead>
				<tbody>
					<?php
						/**
						  * Muestra por pantalla la información que contiene $tbody, recibido del controlador.
						  *
						  * Creado por Sergio Garcia.
						  */
						echo $tbody;
					?>
				</tbody>
			</table>
		</div>
		<div class="paginacion">
			<?php
				/**
				  * Muestra por pantalla la información que contiene $paginacion, recibido del controlador.
				  *
				  * Creado por Sergio Garcia.
				  */
				echo $paginacion;
			?>
		</div>
		<div class="options">
			<div class="add_form" data="Insert">
				INSERTAR MODELO
			</div>
			<div class="add_form" data="Update">
				ACTUALIZAR MODELO
			</div>
		</div>
		<div class="over_form oculto">
			<div class="form">
			</div>
		</div>
		<div class="verificar oculto">
			<div class="ask">
				<p>Seguro que desea <b>borrar</b> este modelo?</p>
				<div class="choice">
					<div class="yes">YES</div>
					<div class="no">NO</div>
				</div>
			</div>
		</div>
	</body>
</html>