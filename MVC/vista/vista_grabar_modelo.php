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
				  * Muestra un mensaje u otro en función de si ha ido bien el insert o no.
				  *
				  * Si $idmodelo (lo pasa el controlador) es -1 significa que ha habido algún problema para grabar
				  * modelo en la base de datos, por lo que mostramos el mensaje de error. Si no, significa que todo
				  * a ido bien y ese $idmodelo contiene el id del modelo grabado, por lo que mostramos que ha ido bien.
				  *
				  * Creado por Sergio Garcia.
				  */
				if ( $idmodelo < 0 ) {
					echo "Se ha producido un error al grabar el modelo";
				} else {
					echo "Se ha grabado correctamente el modelo con el id ".$idmodelo;
				}
			?>
		</div>
		<a href="admin.php">
			<div class="volver">
				<span>volver</span>
			</div>
		</a>
	</body>
</html>