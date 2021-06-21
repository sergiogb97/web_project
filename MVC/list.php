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
	  * Dependiendo de si existe la variable $_SESSION["usuario"], significa que se ha iniciado sesión o no, y se llama a la función
	  * correspondiente del modelo04 para recoger la información necesaria que se pasará a la vista.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @isset(): devuelve true o false en función de si el controlador ha recibido la variable por la que preguntamos.
	  *
	  * @$_SESSION["usuario"]: variable usuario que se traslada por método _SESSION.
	  */
	if ( isset ( $_SESSION[ "usuario" ] ) ) {
		$divLogin = mod004_getSaludo();
	} else {
		$divLogin = mod004_getLogin();
	}
	
	/**
	  * Los datos de $listModelos que utiliza la vista luego se recogen en el modelo04 por medio de
	  * la funcion mod004_getListModelos( $pag, $items ).
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @$pag: página en la que nos encontramos.
	  *
	  * @$items: numero de items que mostramos por página.
	  *
	  * Se pasan $pag y $items como argumento al modelo04.
	  */
	$pag = 1;
	$items = 2;
	$listModelos = mod004_getListModelos( $pag, $items );
	
	require ("vista/vista_list.php");
?>