<?php
	/**
	  * Declara el inicio de la sesion en este controlador, pudiendo utilizar así las variables $_SESSION.
	  *
	  * Creado por Sergio Garcia.
	  */
	session_start();
?>
<?php
	require ("lib/mod004_presentacion.php");
	
	/**
	  * Dependiendo de si existe la variable $_SESSION["usuario"], significa que se ha iniciado sesión o no, y se redirecciona a la
	  * página de la que venía y a la que no tenía acceso pero ahora sí; si no se llama a la función correspondiente del modelo04 para
	  * recoger la información necesaria que se pasará a la vista.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @isset(): devuelve true o false en función de si el controlador ha recibido la variable por la que preguntamos.
	  *
	  * @$_SESSION["usuario"]: variable usuario que se traslada por método _SESSION.
	  */
	if ( isset ( $_SESSION[ "usuario" ] ) ) {
		header ( "Location:admin.php" );
	} else {
		$divLogin = mod004_getLogin();
	}
	
	require ("vista/vista_denied.php");
?>