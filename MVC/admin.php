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
	  * Recoge el número de páginas que va a tener la paginación.
	  *
	  * Creado por Sergio Garcia.
	  */
	$pags = mod004_getNumPaginas();
	
	/**
	  * Definición de la variable $pag;
	  *
	  * Dependiendo de si se ha pasado por método _GET la variable "pag" o no, se le asigna el valor
	  * con el que se ha transmitido o se le asigna 1 por defecto si no es recibida. Si el valor es menor
	  * de 1 o mayor del máximo, se redirecciona a la página inicial.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @isset(): devuelve true o false en función de si el controlador ha recibido la variable por la que preguntamos.
	  *
	  * @$_GET["pag"]: variable pagina que se recibe por método _GET.
	  */
	if ( isset( $_GET[ "pag" ] ) ) {
		$pag = $_GET[ "pag" ];
		if ( $pag < 1 || $pag > $pags ) {
			header( "Location:admin.php" );
		}
	} else {
		$pag = 1;
	}
	
	/**
	  * Dependiendo de si existe la variable $_SESSION["usuario"], significa que se ha iniciado sesión o no, y se llama a las funciones
	  * correspondientes del modelo04 para recoger la información necesaria que se pasará a la vista. Si no se ha iniciado sesión te
	  * redirecciona a una página de acceso denegado.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @isset(): devuelve true o false en función de si el controlador ha recibido la variable por la que preguntamos.
	  *
	  * @$_SESSION["usuario"]: variable usuario que se traslada por método _SESSION.
	  * @$divLogin: recoge la información llamando al modelo04 que usa la vista para el login.
	  * @$tbody: recoge la información llamando al modelo04 que usa la vista para rellenar la tabla de modelos.
	  * @$paginacion: recoge la información llamando al modelo04 que usa la vista para la paginación.
	  */
	if ( isset ( $_SESSION[ "usuario" ] ) ) {
		$divLogin = mod004_getSaludo();
		$tbody = mod004_getDataModelos( $pag );
		$paginacion = mod004_getPaginacion( $pag, $pags );
	} else {
		Header ( "Location:denied.php" );
	}
	
	require ("vista/vista_admin.php");
?>
