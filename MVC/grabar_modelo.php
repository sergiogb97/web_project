<?php
	require ("lib/mod004_presentacion.php");
	
	/**
	  * Comprobación de que se recogen las distintas variables transmitidas por $_POST. Si las variables recibidas de un
	  * checkbutton no existen se les asigna el valor "false" y si no el "true" en lugar del 1 que traen por defecto.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @isset(): devuelve true o false en función de si el controlador ha recibido la variable por la que preguntamos.
	  *
	  * @$_POST[""]: variable que se transmite por método _POST.
	  */
	if ( isset ( $_POST[ "modelo" ] ) && 
	     isset ( $_POST[ "anio" ] ) &&
		 isset ( $_POST[ "alto" ] ) &&
		 isset ( $_POST[ "ancho" ] ) &&
		 isset ( $_POST[ "grosor" ] ) &&
		 isset ( $_POST[ "peso" ] ) &&
		 isset ( $_POST[ "bateria" ] ) &&
		 isset ( $_POST[ "sim" ] ) &&
		 isset ( $_POST[ "procesador" ] ) &&
		 isset ( $_POST[ "familia" ] ) ) {
			 
		$modelo = $_POST[ "modelo" ];
		$anio = $_POST[ "anio" ];
		$alto = $_POST[ "alto" ];
		$ancho = $_POST[ "ancho" ];
		$grosor = $_POST[ "grosor" ];
		$peso = $_POST[ "peso" ];
		$bateria = $_POST[ "bateria" ];
		$sim = $_POST[ "sim" ];
		$procesador = $_POST[ "procesador" ];
		$familia = $_POST[ "familia" ];
		
		if ( isset ( $_POST[ "multisim" ] ) ) {
			$multisim = "true";
		}
		else {
			$multisim = "false";	
		}
		if ( isset ( $_POST[ "sd" ] ) ) {
			$sd = "true";
		}
		else {
			$sd = "false";	
		}
		if ( isset ( $_POST[ "jack" ] ) ) {
			$jack = "true";
		}
		else {
			$jack = "false";	
		}
		
		/**
		  * Los datos de $idmodelo que utiliza la vista luego son el resultado de la llamada al modelo04 por medio de la funcion
		  * mod004_insertarModelo().
		  *
		  * Creado por Sergio Garcia.
		  *
		  * @mod004_insertarModelo( $args ): función del modelo04 que recibe como argumento todos los valores que el usuario ha
		  * registrado en el formulario de inserción y que se han recogido arriba.
		  */
		$idmodelo = mod004_insertarModelo( $modelo, $anio, $alto, $ancho, $grosor, $peso, $bateria, $multisim, $sd, $jack, $sim, $procesador, $familia );		
	}
	
	require ("vista/vista_grabar_modelo.php");
?>