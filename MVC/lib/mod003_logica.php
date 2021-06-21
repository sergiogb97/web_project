 <?php
	require ("mod002_accesoadatos.php");
	
	/**
	  * Llama al modelo02 para poder retornarle los datos al modelo04, no trabaja el retorno.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * Devuelve lo que toma de la llamada al modelo02.
	  */
	function mod003_getSimValues() {
		$arDataSims = mod002_getSimValues();
		return $arDataSims;
	}
	
	/**
	  * Llama al modelo02 para poder retornarle los datos al modelo04, no trabaja el retorno.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * Devuelve lo que toma de la llamada al modelo02.
	  */
	function mod003_getProcesadorValues() {
		$arDataProcesadores = mod002_getProcesadorValues();
		return $arDataProcesadores;
	}
	
	/**
	  * Llama al modelo02 para poder retornarle los datos al modelo04, no trabaja el retorno.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * Devuelve lo que toma de la llamada al modelo02.
	  */
	function mod003_getFamiliaValues() {
		$arDataFamilias = mod002_getFamiliaValues();
		return $arDataFamilias;
	}
	
	/**
	  * Llama al modelo02 para poder retornarle los datos al modelo04, no trabaja el retorno.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @$modelo: nombre del modelo que se desea insertar.
	  * @$anio: anio del modelo que se desea insertar.
	  * @$alto: alto del modelo que se desea insertar.
	  * @$ancho: ancho del modelo que se desea insertar.
	  * @$grosor: grosor del modelo que se desea insertar.
	  * @$peso: peso del modelo que se desea insertar.
	  * @$bateria: bateria del modelo que se desea insertar.
	  * @$multisim: multisim del modelo que se desea insertar.
	  * @$sd: sd del modelo que se desea insertar.
	  * @$jack: jack del modelo que se desea insertar.
	  * @$sim: idsim del modelo que se desea insertar.
	  * @$procesador: idprocesador del modelo que se desea insertar.
	  * @$familia: iffamilia del modelo que se desea insertar.
	  *
	  * Devuelve lo que toma de la llamada al modelo02.
	  */
	function mod003_insertarModelo( $modelo, $anio, $alto, $ancho, $grosor, $peso, $bateria, $multisim, $sd, $jack, $sim, $procesador, $familia ) {
		$idmodelo = mod002_insertarModelo( $modelo, $anio, $alto, $ancho, $grosor, $peso, $bateria, $multisim, $sd, $jack, $sim, $procesador, $familia );
		return $idmodelo;
	}
	
	/**
	  * Llama al modelo02 para poder retornarle los datos al modelo04, no trabaja el retorno.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @$idmodelo: id del modelo que se desea borrar.
	  *
	  * Devuelve lo que toma de la llamada al modelo02.
	  */
	function mod003_deleteModelo( $idmodelo ) {
		$result = mod002_deleteModelo( $idmodelo );
		return $result;
	}
	
	/**
	  * Llama al modelo02 para poder retornarle los datos al modelo04, redondea la división del retorno entre el número de
	  * items por página para saber el máximo.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * Devuelve lo que toma de la llamada al modelo02.
	  */
	function mod003_getNumPaginas() {
		$pags = mod002_getNumModelos();
		$pags = ceil( $pags / 7 );
		return $pags;
	}
	
	/**
	  * Llama al modelo02 para poder retornarle los datos al modelo04, si la query ha ido bien y se puede logear añade
	  * la variable usuario y nick del _SESSION al retorno.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @$nick: input del campo nick.
	  * @$password: input del campo password.
	  *
	  * Devuelve lo que toma de la llamada al modelo02.
	  */
	function mod003_setLogin( $nick, $password ) {
		$arDatosUsuario = mod002_setLogin( $nick, $password );
		
		if ( $arDatosUsuario[ "idusuario" ] > 0 ) { 
			$_SESSION[ "usuario" ] = $arDatosUsuario[ "idusuario" ];
			$_SESSION[ "nick" ] = $arDatosUsuario[ "nick" ];
		}
		return $arDatosUsuario;
	}
	
	/**
	  * Llama al modelo02 para poder retornarle los datos al modelo04, no trabaja el retorno.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * Devuelve lo que toma de la llamada al modelo02.
	  */
	function mod003_getSOs() {
		$arDatosSO = mod002_getSOs();
		return $arDatosSO;
	}
	
	/**
	  * Llama al modelo02 para poder retornarle los datos al modelo04, no trabaja el retorno.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @$idso: id del sistema operativo del que se recogen las familias.
	  *
	  * Devuelve lo que toma de la llamada al modelo02.
	  */
	function mod003_getFamilias( $idso ) {
		$arDatosFamilia = mod002_getFamilias( $idso );
		return $arDatosFamilia;
	}
	
	/**
	  * Llama al modelo02 para poder retornarle los datos al modelo04, no trabaja el retorno.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @$idfamilia: id de la familia de la que se recogen los modelos.
	  *
	  * Devuelve lo que toma de la llamada al modelo02.
	  */
	function mod003_getModelos( $idfamilia ) {
		$arDatosModelo = mod002_getModelos( $idfamilia );
		return $arDatosModelo;
	}
	
	function mod003_getDataModelo( $idmodelo ) {
		$arDataModelos = mod002_getDataModelo( $idmodelo );

		if ( $arDataModelos[ 8 ] ) {
			$arDataModelos[ 8 ] = "Yes";
		} else {
			$arDataModelos[ 8 ] = "No";
		}

		if ( $arDataModelos[ 9 ] ) {
			$arDataModelos[ 9 ] = "Yes";
		} else {
			$arDataModelos[ 9 ] = "No";
		}

		if ( $arDataModelos[ 10 ] ) {
			$arDataModelos[ 10 ] = "Yes";
		} else {
			$arDataModelos[ 10 ] = "No";
		}

		$idsim = $arDataModelos[ 11 ];
		$idprocesador = $arDataModelos[ 12 ];
		$idsmartphone = $arDataModelos[ 13 ];
		$arDataModelos[ 14 ] = $idsmartphone;

		$nomsim = mod002_returnSim( $idsim );
		$nomprocesador = mod002_returnProcesador( $idprocesador );
		$arNomsmartphone = mod002_returnSmartphone( $idsmartphone );

		$arDataModelos[ 11 ] = $nomsim;
		$arDataModelos[ 12 ] = $nomprocesador;
		$arDataModelos[ 13 ] = $arNomsmartphone[ 0 ];

		return $arDataModelos;
	}
	
	function mod003_getDataModelos( $pag ) {
		$arDataModelos = mod002_getDataModelos( $pag );
		
		for ( $i = 0; $i < count( $arDataModelos ); $i++ ) {

		$idsim = $arDataModelos[ $i ][ 11 ];
		$idprocesador = $arDataModelos[ $i ][ 12 ];
		$idsmartphone = $arDataModelos[ $i ][ 13 ];

		$nomsim = mod002_returnSim( $idsim );
		$nomprocesador = mod002_returnProcesador( $idprocesador );
		$arNomsmartphone = mod002_returnSmartphone( $idsmartphone );

		$arDataModelos[ $i ][ 11 ] = $nomsim;
		$arDataModelos[ $i ][ 12 ] = $nomprocesador;
		$arDataModelos[ $i ][ 13 ] = $arNomsmartphone[ 0 ];
		}

		return $arDataModelos;
	}
	
	/**
	  * Llama al modelo02 para poder retornarle los datos al modelo04, si no encuentra imagen le añade una ruta por defecto.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * Devuelve lo que toma de la llamada al modelo02.
	  */
	function mod003_getImgModelo( $idmodelo ) {
		$rutaImg = mod002_getImgModelo( $idmodelo );
		
		if ( $rutaImg == -1 ) {
			$rutaImg = "imgs/not_found.jpg";
		}
		return $rutaImg;
	}
	
	/**
	  * Llama al modelo02 para poder retornarle los datos al modelo04, no trabaja el retorno.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * Devuelve lo que toma de la llamada al modelo02.
	  */
	function mod003_getNumModelosFamilia( $idfamilia ) {
		$numModelosFamilia = mod002_getNumModelosFamilia( $idfamilia );
		return $numModelosFamilia;
	}
	
	/**
	  * Llama al modelo02 para poder retornarle los datos al modelo04, no trabaja el retorno.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * Devuelve lo que toma de la llamada al modelo02.
	  */
	function mod003_getBusqueda( $input ) {
		$arDataSearch = mod002_getBusqueda( $input );
		return $arDataSearch;
	}
	
	/**
	  * Llama al modelo02 para poder retornarle los datos al modelo04, no trabaja el retorno.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * Devuelve lo que toma de la llamada al modelo02.
	  */
	function mod003_getAllModelos() {
		$arDataModelos = mod002_getAllModelos();
		return $arDataModelos;
	}
	
	function mod003_update_form( $idmodelo, $idprocesador, $nombre ) {
		if ( $idprocesador == -1 ) {
			$registro = mod002_transaction( $idmodelo, $nombre );
			if ( $registro == -1 ) {
				$result = "Se ha producido un error al grabar los datos";
			} else {
				$result = "Se ha grabado el procesador con id: ".$registro;
			}
		} else {
			$registros = mod002_update( $idmodelo, $idprocesador );
			if ( $registros == 1 ) {
				$result = "Se ha modificado ".$registros." registro";
			} else {
				$result = "Se han modificado ".$registros." registros";
			}
		}
		
		return $result;
	}
	
	function mod003_getListModelos( $pag, $items ) {
		$arDataModelos = mod002_getListModelos( $pag, $items );
		
		for ( $i = 0; $i < count( $arDataModelos ); $i++ ) {
			$arDataModelos[ $i ][ 2 ] = mod003_getImgModelo( $arDataModelos[ $i ][ 0 ] );
		}
		
		return $arDataModelos;
	}
	
	function mod003_getPagsModelos( $items ) {
		$modelos = mod002_getNumModelos();
		
		$pags = ceil( $modelos / $items );
		
		return $pags;
	}
?>