<?php
	require ("lib/mod004_presentacion.php");
	
	/**
	  * Se comprueba que se hayan transmitido las variables "modelo" y "procesador" por $_POST, si el procesador
	  * tiene un valor de -1 significa que se ha transmitido otra variable ("inprocesador") y se le asigna a cada variable
	  * el valor que corresponde.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @isset(): devuelve true o false en función de si el controlador ha recibido la variable por la que preguntamos.
	  *
	  * @$_SESSION[""]: variables que se transmiten por método _POST.
	  */
	if ( isset ( $_POST[ "modelo" ] ) && isset ( $_POST[ "procesador" ] ) ) {
		
		$idmodelo = $_POST[ "modelo" ];
		$idprocesador = $_POST[ "procesador" ];
		
		if ( $idprocesador == -1 ) {
			$nombre = $_POST[ "inprocesador" ];
		} else {
			$nombre = "";
		}
		
		/**
		  * El $result que devuelve la funcion del modelo04 mod004_update_form() lo utiliza luego la vista.
		  *
		  * Creado por Sergio Garcia.
		  *
		  * @mod004_update_form( $args ): se le envían como argumento las variables recogidas arriba.
		  */
		$result = mod004_update_form( $idmodelo, $idprocesador, $nombre );		
	}
	
	require ("vista/vista_actualizar_modelo.php");
?>