<?php
	/**
	  * Se conecta con la base datos "smartphones" usando la direccion "localhost" y el usurario "root",
	  * sin contraseña ya que la BD no tiene. Guarda la conexión en $db, si $db es 0 es que no se ha
	  * podido conectar y muestra el mensaje de error; si no retorna $db.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * Retorna $bd.
	  */
	function mod001_conectoBD() {
		$direccion = "localhost";
		$usuario = "root";
		$contrasena = "";
		$database = "smartphones";
		
		$db = mysqli_connect( $direccion, $usuario, $contrasena, $database );
		if ( !$db ) {
			echo "conexion fallida";
		}
		
		return $db;
	}
	
	/**
	  * Se desconecta de una base de datos por medio del valor de conexión que recibe como argumento.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @$db = argumento que recibe, es el valor de una conexión a una BD anterior.
	  *
	  * No retorna nada.
	  */
	function mod001_desconectoBD( $db ) {
		if ( $db ) {
			mysqli_close( $db );
		}
	}
?>
