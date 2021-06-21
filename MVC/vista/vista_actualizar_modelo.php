<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Smartphones</title>
		<style>
			body {
				background-image: url(imgs/background.jpg);
				background-attachment: fixed;
				background-repeat: no-repeat;
				background-size: cover;
			}
			
			.mensaje {
				margin-top: 200px;
				width: 100%;
				text-align: center;
				font-size: 16px;
				font-weight: bold;
			}
			
			a {
				text-decoration: none;
				color: black;
				font-size: 14px;
				font-weight: bold;
			}
			
			.volver {
				margin-top: 50px;
				width: 100%;
				text-align: center;
			}
			
			span {
				padding: 2px 6px;
				border-radius: 10px;
				border: 2px solid #1d90b3;
				cursor: pointer;
				transition: 0.5s;
			}
			
			span:hover {
				background-color: #1d90b3;
				color: white;
			}
		</style>
		<script>		
		</script>
	</head>
	<body>
		<div class="mensaje">
			<?php
				/**
				  * Muestra el contenido de $result que recibe del controlador.
				  *
				  * Creado por Sergio Garcia.
				  */
				echo $result;
			?>
		</div>
		<a href="admin.php">
			<div class="volver">
				<span>volver</span>
			</div>
		</a>
	</body>
</html>