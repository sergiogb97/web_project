<?php
	/**
	  * Declara el inicio de la sesion en este controlador, pudiendo utilizar así las variables $_SESSION.
	  *
	  * Creado por Sergio Garcia.
	  */
	session_start();
?>
<?php
	require( "../lib/mod004_presentacion.php" );
	
	/**
	  * Recoge en la variable $accion el valor de "accion" transmitido por _POST.
	  *
	  * Creado por Sergio Garcia.
	  */
	$accion = $_POST[ "accion" ];
	
	/**
	  * Dependiendo de $accion el controladorAJAX ejecutará una llamada u otra definida en el switch.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @"deleteModelo": recoge la variable "idmodelo" en $idmodelo y llama a la función mod004_deleteModelo()
	  * del modelo04 pasándole como argumento $idmodelo. Retorna los $datos recibidos de la funcion
	  * y si no recibe "idmodelo" no hace nada.
	  *
	  * @"login": recoge las variables "nick" y "password" en $nick y $password y llama a la función
	  * mod004_setLogin() del modelo04 pasándole como argumentos $nick y $password.
	  * Retorna los $datos recibidos de la funcion por JSON y si no recibe "nick" o "password" no hace nada.
	  *
	  * @"getFamilias": recoge la variable "idso" en $idso y llama a la función mod004_getFamilias()
	  * del modelo04 pasándole como argumento $idso. Retorna los $datos recibidos de la funcion
	  * y si no recibe "idso" no hace nada.
	  *
	  * @"getModelos": recoge la variable "idfamilia" en $idfamilia y llama a la función mod004_getModelos()
	  * del modelo04 pasándole como argumento $idfamilia. Retorna los $datos recibidos de la funcion
	  * y si no recibe "idfamilia" no hace nada.
	  *
	  * @"getDataModelo": recoge la variable "idmodelo" en $idmodelo, define $pag y llama a la función mod004_getDataModelo()
	  * del modelo04 pasándole como argumentos $idmodelo y $pag. Retorna los $datos recibidos de la funcion
	  * y si no recibe "idmodelo" no hace nada.
	  *
	  * @"getBusqueda": recoge la variable "input" en $input y llama a la función mod004_getBusqueda()
	  * del modelo04 pasándole como argumento $input. Retorna los $datos recibidos de la funcion
	  * y si no recibe "input" no hace nada.
	  *
	  * @"getInsertForm": Llama a la función mod004_getInsertForm() del modelo04. Retorna los $datos recibidos de la funcion.
	  *
	  * @"getUpdateForm": Llama a la función mod004_getUpdateForm() del modelo04. Retorna los $datos recibidos de la funcion.
	  *
	  * @"paginacion": recoge las variables "pag" y "items" en $pag y $items y llama a la función
	  * mod004_getListModelos() del modelo04 pasándole como argumentos $pag y $items.
	  * Retorna los $datos recibidos de la funcion y si no recibe "pag" o "items" no hace nada.
	  *
	  * @"default": devuelve un "Acción no permitida".
	  */
	switch ( $accion ) {
		case "deleteModelo":
			if ( isset ( $_POST[ "idmodelo" ] ) ) {
				$idmodelo = $_POST[ "idmodelo" ];
				$datos = mod004_deleteModelo( $idmodelo );
			}
			echo $datos;
		break;
		case "login":
			if ( isset ( $_POST[ "nick" ] ) && isset ( $_POST[ "password" ] ) ) {
				
				$nick = $_POST[ "nick" ];
				$password = $_POST[ "password" ];
				
				$arDatos = mod004_setLogin( $nick, $password );
			}
			echo json_encode( $arDatos );
		break;
		case "getFamilias":
			if ( isset ( $_POST[ "idso" ] ) ) {
				$idso = $_POST[ "idso" ];
				$datos = mod004_getFamilias( $idso );
			}
			echo $datos;
		break;
		case "getModelos":
			if ( isset ( $_POST[ "idfamilia" ] ) ) {
				$idfamilia = $_POST[ "idfamilia" ];
				$datos = mod004_getModelos( $idfamilia );
			}
			echo $datos;
		break;
		case "getDataModelo":
			if ( isset ( $_POST[ "idmodelo" ] ) ) {
				$idmodelo = $_POST[ "idmodelo" ];
				$pag = 0;
				$datos = mod004_getDataModelo( $idmodelo, $pag );
			}
			echo $datos;
		break;
		case "getBusqueda":
			if ( isset ( $_POST[ "input" ] ) ) {
				$input = $_POST[ "input" ];
				$datos = mod004_getBusqueda( $input );
			}
			echo $datos;
		break;
		case "getInsertForm":
			$datos = mod004_getInsertForm();
			echo $datos;
		break;
		case "getUpdateForm":
			$datos = mod004_getUpdateForm();
			echo $datos;
		break;
		case "paginacion":
			if ( isset ( $_POST[ "pag" ] ) && isset ( $_POST[ "items" ] ) ) {
				$pag = $_POST[ "pag" ];
				$items = $_POST[ "items" ];
				$datos = mod004_getListModelos( $pag, $items );
			}
			echo $datos;
		break;
		default:
			echo "Acción no permitida";
		break;
	}
?>