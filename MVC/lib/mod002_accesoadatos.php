 <?php
	require ("mod001_conexion.php");

	function mod002_getDataPags() {
		$link = mod001_conectoBD();

		$strSQL = "SELECT COUNT( * ) AS numMod ";
		$strSQL.= "FROM 855_MODELOS ";

		$result = mysqli_query( $link, $strSQL );

		if ( $result ) {
			if ( $row = mysqli_fetch_array( $result ) ) {
				$retorno = $row [ "numMod" ];
			}
		}

		mod001_desconectoBD( $link );

		return $retorno;
	}

  function mod002_getImgModelo( $idmodelo ) {
    $link = mod001_conectoBD();

    $strSQL = "SELECT 857_ruta ";
    $strSQL.= "FROM 857_IMAGENES ";
    $strSQL.= "WHERE 855_idmodelo = ".$idmodelo;
    $strSQL.= " LIMIT 1";

    $result = mysqli_query( $link, $strSQL );
	
	$retorno = -1;

    if ( $result ) {
      if ( $row = mysqli_fetch_array( $result ) ) {
        $retorno = $row [ "857_ruta" ];
      }
    }

    mod001_desconectoBD( $link );

    return $retorno;
  }

  function mod002_getSo() {
    $link = mod001_conectoBD();

    $strSQL = "SELECT * ";
    $strSQL.= "FROM 700_SO ";

    $result = mysqli_query( $link, $strSQL );

    $i = 0;
    if ( $result ) {
      while ( $row = mysqli_fetch_array( $result ) ) {
        $arRetorno[ $i ][ 0 ] = $row [ "700_idso" ];
        $arRetorno[ $i ][ 1 ] = $row [ "700_nombre" ];
        $i++;
      }
    }

    mod001_desconectoBD( $link );

    return $arRetorno;
  }

	function mod002_returnProcesador( $idprocesador ) {
		$link = mod001_conectoBD();

		$strSQL = "SELECT 600_nombre ";
		$strSQL.= "FROM 600_PROCESADORES ";
		$strSQL.= "WHERE 600_idprocesador = ".$idprocesador;

		$result = mysqli_query( $link, $strSQL );

		if ( $result ) {
			if ( $row = mysqli_fetch_array( $result ) ) {
				$retorno = $row [ "600_nombre" ];
			}
		}

		mod001_desconectoBD( $link );

		return $retorno;
	}

	function mod002_returnSim( $id ) {
		$link = mod001_conectoBD();

		$strSQL = "SELECT 500_nombre ";
		$strSQL.= "FROM 500_SIM ";
		$strSQL.= "WHERE 500_idsim = ".$id;

		$result = mysqli_query( $link, $strSQL );

		if ( $result ) {
			if ( $row = mysqli_fetch_array( $result ) ) {
				$retorno = $row [ "500_nombre" ];
			}
		}

		mod001_desconectoBD( $link );

		return $retorno;
	}

	function mod002_returnSmartphone( $idsmartphone ) {
		$link = mod001_conectoBD();

		$strSQL = "SELECT * ";
		$strSQL.= "FROM 852_SMARTPHONES ";
		$strSQL.= "WHERE 852_idsmartphone = ".$idsmartphone;

		$result = mysqli_query( $link, $strSQL );

		if ( $result ) {
			while ( $row = mysqli_fetch_array( $result ) ) {
				$arRetorno[ 0 ] = $row [ "852_familia" ];
				$arRetorno[ 1 ] = $row [ "850_idmarca" ];
				$arRetorno[ 2 ] = $row [ "700_idso" ];
			}
		}

		mod001_desconectoBD( $link );

		return $arRetorno;
	}
	
	function mod002_getSimValues() {
		$link = mod001_conectoBD();
		
		$strSQL = "SELECT * ";
		$strSQL.= "FROM 500_SIM ";
		
		$result = mysqli_query( $link, $strSQL );
		
		$i = 0;
		if ( $result ) {
			while ( $row = mysqli_fetch_array( $result ) ) {
				$arRetorno[ $i ][ 0 ] = $row [ "500_idsim" ];
				$arRetorno[ $i ][ 1 ] = $row [ "500_nombre" ];
				$i++;
			}
		}
		
		mod001_desconectoBD( $link );
		
		return $arRetorno;
	}
	
	function mod002_getProcesadorValues() {
		$link = mod001_conectoBD();
		
		$strSQL = "SELECT * ";
		$strSQL.= "FROM 600_PROCESADORES ";
		
		$result = mysqli_query( $link, $strSQL );
		
		$i = 0;
		if ( $result ) {
			while ( $row = mysqli_fetch_array( $result ) ) {
				$arRetorno[ $i ][ 0 ] = $row [ "600_idprocesador" ];
				$arRetorno[ $i ][ 1 ] = $row [ "600_nombre" ];
				$i++;
			}
		}
		
		mod001_desconectoBD( $link );
		
		return $arRetorno;
	}

	function mod002_getFamiliaValues() {
		$link = mod001_conectoBD();
		
		$strSQL = "SELECT * ";
		$strSQL.= "FROM 852_SMARTPHONES ";
		
		$result = mysqli_query( $link, $strSQL );
		
		$i = 0;
		if ( $result ) {
			while ( $row = mysqli_fetch_array( $result ) ) {
				$arRetorno[ $i ][ 0 ] = $row [ "852_idsmartphone" ];
				$arRetorno[ $i ][ 1 ] = $row [ "852_familia" ];
				$i++;
			}
		}
		
		mod001_desconectoBD( $link );
		
		return $arRetorno;
	}
	
	function mod002_insertarModelo( $modelo, $anio, $alto, $ancho, $grosor, $peso, $bateria, $multisim, $sd, $jack, $sim, $procesador, $familia ) {
		$link = mod001_conectoBD();
		
		$strSQL = "INSERT INTO 855_MODELOS ";
		$strSQL.= "( 855_idmodelo, 855_nombre, 855_anio, 855_alto, 855_ancho, 855_grosor, 855_peso, 855_bateria, 855_multisim, 855_sd, 855_jack, 500_idsim, 600_idprocesador, 852_idsmartphone ) ";
		$strSQL.= "VALUES ";
		$strSQL.= "( null, ' ";
		$strSQL.= $modelo."', ' ";
		$strSQL.= $anio."', ";
		$strSQL.= $alto.", ";
		$strSQL.= $ancho.", ";
		$strSQL.= $grosor.", ";
		$strSQL.= $peso.", ";
		$strSQL.= $bateria.", ";
		$strSQL.= $multisim.", ";
		$strSQL.= $sd.", ";
		$strSQL.= $jack.", ";
		$strSQL.= $sim.", ";
		$strSQL.= $procesador.", ";
		$strSQL.= $familia." ) ";
		
		$result = mysqli_query( $link, $strSQL );
		
		if ( !$result ) {
			$idmodelo = -1;
		} else {
			$idmodelo = mysqli_insert_id( $link );
		}
		
		mod001_desconectoBD( $link );
		
		return $idmodelo;		
	}
	
	function mod002_deleteModelo( $idmodelo ) {
		$link = mod001_conectoBD();
		
		$strSQL = "DELETE ";
		$strSQL.= "FROM 855_MODELOS ";
		$strSQL.= "WHERE 855_idmodelo = ".$idmodelo;
		
		$result = mysqli_query( $link, $strSQL );
		
		if ( $result ) {
			$retorno = mysqli_affected_rows( $link );
		}
		
		mod001_desconectoBD( $link );
		
		return $retorno;
	}
		
	function mod002_getNumModelos() {
		$link = mod001_conectoBD();
		
		$strSQL = "SELECT COUNT( * ) AS numMod ";
		$strSQL.= "FROM 855_MODELOS ";
		
		$result = mysqli_query( $link, $strSQL );
		
		if ( $result ) {
			if ( $row = mysqli_fetch_array( $result ) ) {
				$retorno = $row[ "numMod" ];
			}
		}
		
		mod001_desconectoBD( $link );
		
		return $retorno;
	}
	
	function mod002_setLogin( $nick, $password ) {
		$link = mod001_conectoBD();
		
		$strSQL = "SELECT *";
		$strSQL.= " FROM 100_USUARIOS ";
		$strSQL.= " WHERE 100_nick = '" . $nick . "'";
		$strSQL.= " AND 100_contrasena = '" . $password . "'";
		
		$result = mysqli_query( $link, $strSQL );
		
		$arRetorno[ "idusuario" ] = -1;
		$arRetorno[ "nick" ] = "";
		$arRetorno[ "correo" ] = "";
		$arRetorno[ "password" ] = "";
		
		if ( $result ) {
			if ( $row = mysqli_fetch_array( $result ) ) {
				$arRetorno[ "idusuario" ] = $row[ "100_idusuario" ];
				$arRetorno[ "nick" ] = utf8_decode( $row[ "100_nick" ] );
				$arRetorno[ "correo" ] = $row[ "100_correo" ];
				$arRetorno[ "password" ] = $row[ "100_contrasena" ];
			}
		}
		
		mod001_desconectoBD( $link );
		
		return $arRetorno;
	}
	
	function mod002_getSOs() {
		$link = mod001_conectoBD();
		
		$strSQL = "SELECT * ";
		$strSQL.= "FROM 700_SO ";
		
		$result = mysqli_query( $link, $strSQL );
		
		$i = 0;
		if ( $result ) {
			while ( $row = mysqli_fetch_array( $result ) ) {
				$arRetorno[ $i ][ 0 ] = $row[ "700_idso" ];
				$arRetorno[ $i ][ 1 ] = $row[ "700_nombre" ];
				$i++;
			}
		}
		
		mod001_desconectoBD( $link );
		
		return $arRetorno;
	}
	
	function mod002_getFamilias( $idso ) {
		$link = mod001_conectoBD();
		
		$strSQL = "SELECT * ";
		$strSQL.= "FROM 852_SMARTPHONES ";
		$strSQL.= "WHERE 700_idso = ".$idso;
		
		$result = mysqli_query( $link, $strSQL );
		
		$i = 0;
		if ( $result ) {
			while ( $row = mysqli_fetch_array( $result ) ) {
				$arRetorno[ $i ][ 0 ] = $row[ "852_idsmartphone" ];
				$arRetorno[ $i ][ 1 ] = $row[ "852_familia" ];
				$arRetorno[ $i ][ 2 ] = $row[ "850_idmarca" ];
				$arRetorno[ $i ][ 3 ] = $row[ "700_idso" ];
				$i++;
			}
		}
		
		mod001_desconectoBD( $link );
		
		return $arRetorno;
	}
	
	function mod002_getModelos( $idfamilia ) {
		$link = mod001_conectoBD();
		
		$strSQL = "SELECT * ";
		$strSQL.= "FROM 855_MODELOS ";
		$strSQL.= "WHERE 852_idsmartphone = ".$idfamilia;
		
		$result = mysqli_query( $link, $strSQL );
		
		$i = 0;
		if ( $result ) {
			while ( $row = mysqli_fetch_array( $result ) ) {
				$arRetorno[ $i ][ 0 ] = $row[ "855_idmodelo" ];
				$arRetorno[ $i ][ 1 ] = $row[ "855_nombre" ];
				$i++;
			}
		}
		
		mod001_desconectoBD( $link );
		
		return $arRetorno;
	}
	
	function mod002_getDataModelo( $idmodelo ) {
		$link = mod001_conectoBD();

		$strSQL = "SELECT * ";
		$strSQL.= "FROM 855_MODELOS ";
		$strSQL.= "WHERE 855_idmodelo = ".$idmodelo;

		$result = mysqli_query( $link, $strSQL );

		if ( $result ) {
			if ( $row = mysqli_fetch_array( $result ) ) {
				$arRetorno[ 0 ] = $row [ "855_idmodelo" ];
				$arRetorno[ 1 ] = $row [ "855_nombre" ];
				$arRetorno[ 2 ] = $row [ "855_anio" ];
				$arRetorno[ 3 ] = $row [ "855_alto" ];
				$arRetorno[ 4 ] = $row [ "855_ancho" ];
				$arRetorno[ 5 ] = $row [ "855_grosor" ];
				$arRetorno[ 6 ] = $row [ "855_peso" ];
				$arRetorno[ 7 ] = $row [ "855_bateria" ];
				$arRetorno[ 8 ] = $row [ "855_multisim" ];
				$arRetorno[ 9 ] = $row [ "855_sd" ];
				$arRetorno[ 10 ] = $row [ "855_jack" ];
				$arRetorno[ 11 ] = $row [ "500_idsim" ];
				$arRetorno[ 12 ] = $row [ "600_idprocesador" ];
				$arRetorno[ 13 ] = $row [ "852_idsmartphone" ];
			}
		}

		mod001_desconectoBD( $link );
		
		return $arRetorno;
	}
	
	function mod002_getDataModelos( $pag ) {
		$link = mod001_conectoBD();
		
		$strSQL = "SELECT * ";
		$strSQL.= "FROM 855_MODELOS ";
		$strSQL.= "LIMIT ".( ( $pag * 7 ) - 7 ).", 7 ";
		
		$result = mysqli_query( $link, $strSQL );

		$i = 0;
		if ( $result ) {
			while ( $row = mysqli_fetch_array( $result ) ) {
				$arRetorno[ $i ][ 0 ] = $row [ "855_idmodelo" ];
				$arRetorno[ $i ][ 1 ] = $row [ "855_nombre" ];
				$arRetorno[ $i ][ 2 ] = $row [ "855_anio" ];
				$arRetorno[ $i ][ 3 ] = $row [ "855_alto" ];
				$arRetorno[ $i ][ 4 ] = $row [ "855_ancho" ];
				$arRetorno[ $i ][ 5 ] = $row [ "855_grosor" ];
				$arRetorno[ $i ][ 6 ] = $row [ "855_peso" ];
				$arRetorno[ $i ][ 7 ] = $row [ "855_bateria" ];
				$arRetorno[ $i ][ 8 ] = $row [ "855_multisim" ];
				$arRetorno[ $i ][ 9 ] = $row [ "855_sd" ];
				$arRetorno[ $i ][ 10 ] = $row [ "855_jack" ];
				$arRetorno[ $i ][ 11 ] = $row [ "500_idsim" ];
				$arRetorno[ $i ][ 12 ] = $row [ "600_idprocesador" ];
				$arRetorno[ $i ][ 13 ] = $row [ "852_idsmartphone" ];
				$i++;
			}
		}

		mod001_desconectoBD( $link );
		
		return $arRetorno;
	}
	
	function mod002_getNumModelosFamilia( $idfamilia ) {
		$link = mod001_conectoBD();
		
		$strSQL = "SELECT COUNT( * ) AS numModelos ";
		$strSQL.= "FROM 855_MODELOS ";
		$strSQL.= "WHERE 852_idsmartphone = ".$idfamilia;
		
		$result = mysqli_query( $link, $strSQL );
		
		if ( $result ) {
			if ( $row = mysqli_fetch_array( $result ) ) {
				$retorno = $row [ "numModelos" ];
			}
		}

		mod001_desconectoBD( $link );
		
		return $retorno;
	}
	
	function mod002_getBusqueda( $input ) {
		$link = mod001_conectoBD();
		
		$strSQL = "SELECT * ";
		$strSQL.= "FROM 855_MODELOS ";
		$strSQL.= "WHERE 855_nombre LIKE '%" . $input . "%'";
		
		$result = mysqli_query( $link, $strSQL );
		
		$i = 0;
		$arRetorno[ 0 ][ 0 ] = -1;
		$arRetorno[ 0 ][ 1 ] = "No hay datos para la busqueda: " . $input;
		$arRetorno[ 0 ][ 2 ] = "";
		$arRetorno[ 0 ][ 3 ] = "";
		
		if ( $result ) {
			while ( $row = mysqli_fetch_array( $result ) ) {
				$arRetorno[ $i ][ 0 ] = $row[ "855_idmodelo" ];
				$arRetorno[ $i ][ 1 ] = $row[ "855_nombre" ];
				$i++;
			}
		}
		
		mod001_desconectoBD( $link );
		
		return $arRetorno;
	}
	
	function mod002_getAllModelos() {
		$link = mod001_conectoBD();
		
		$strSQL = "SELECT * ";
		$strSQL.= "FROM 855_MODELOS ";
		
		$result = mysqli_query( $link, $strSQL );
		
		$i = 0;
		if ( $result ) {
			while ( $row = mysqli_fetch_array( $result ) ) {
				$arRetorno[ $i ][ 0 ] = $row [ "855_idmodelo" ];
				$arRetorno[ $i ][ 1 ] = $row [ "855_nombre" ];
				$arRetorno[ $i ][ 2 ] = $row [ "855_anio" ];
				$arRetorno[ $i ][ 3 ] = $row [ "855_alto" ];
				$arRetorno[ $i ][ 4 ] = $row [ "855_ancho" ];
				$arRetorno[ $i ][ 5 ] = $row [ "855_grosor" ];
				$arRetorno[ $i ][ 6 ] = $row [ "855_peso" ];
				$arRetorno[ $i ][ 7 ] = $row [ "855_bateria" ];
				$arRetorno[ $i ][ 8 ] = $row [ "855_multisim" ];
				$arRetorno[ $i ][ 9 ] = $row [ "855_sd" ];
				$arRetorno[ $i ][ 10 ] = $row [ "855_jack" ];
				$arRetorno[ $i ][ 11 ] = $row [ "500_idsim" ];
				$arRetorno[ $i ][ 12 ] = $row [ "600_idprocesador" ];
				$arRetorno[ $i ][ 13 ] = $row [ "852_idsmartphone" ];
				$i++;
			}
		}
		
		mod001_desconectoBD( $link );
		
		return $arRetorno;
	}
	
	function mod002_update( $idmodelo, $idprocesador ) {
		$link = mod001_conectoBD();
		
		$strSQL = "UPDATE 855_MODELOS ";
		$strSQL.= "SET 600_idprocesador = ".$idprocesador;
		$strSQL.= " WHERE 855_idmodelo = ".$idmodelo;
		
		$result = mysqli_query( $link, $strSQL );
		
		if ( !$result ) {
			$retorno = -1;
		} else {
			$retorno = mysqli_affected_rows( $link );
		}
		
		mod001_desconectoBD( $link );
		
		return $retorno;
	}
	
	function mod002_transaction( $idmodelo, $nombre ) {
		$link = mod001_conectoBD();

		$strSQL = "START TRANSACTION";
		$result = mysqli_query( $link, $strSQL );
		
		$strSQL = "INSERT INTO 600_PROCESADORES ";
		$strSQL.= "( 600_idprocesador, 600_nombre ) ";
		$strSQL.= "VALUES ";
		$strSQL.= "( null, '".$nombre."' ) ";
		
		$result = mysqli_query( $link, $strSQL );
		
		if ( !$result ) {
			$error = -1;
			
			$strSQL = "ROLLBACK";
			$result = mysqli_query( $link, $strSQL );

		} else {
			$idprocesador = mysqli_insert_id ( $link );
			
			$strSQL = "UPDATE 855_MODELOS ";
			$strSQL.= "SET 600_idprocesador = ".$idprocesador;
			$strSQL.= " WHERE 855_idmodelo = ".$idmodelo;
		
			$result = mysqli_query( $link, $strSQL );
			
			if ( !$result ) {
				$error = -1;
				
				$strSQL = "ROLLBACK";
				$result = mysqli_query( $link, $strSQL );
			} else {
				$strSQL = "COMMIT";
				$result = mysqli_query( $link, $strSQL );
				$error = $idprocesador;
			}
		}
		
		return $error;		
	}
	
	function mod002_getListModelos( $pag, $items ) {
		$link = mod001_conectoBD();
		
		$strSQL = "SELECT 855_idmodelo, 855_nombre ";
		$strSQL.= "FROM 855_MODELOS ";
		$strSQL.= "LIMIT ".( ( $pag * $items ) - $items ).", ".$items;

		$result = mysqli_query( $link, $strSQL );
		
		$i = 0;
		$arRetorno[ 0 ][ 0 ] = -1;
		$arRetorno[ 0 ][ 1 ] = "No existen mas modelos";
		
		if ( $result ) {
			while ( $row = mysqli_fetch_array( $result ) ) {
				$arRetorno[ $i ][ 0 ] = $row[ "855_idmodelo" ];
				$arRetorno[ $i ][ 1 ] = $row[ "855_nombre" ];
				$i++;
			}
		}
		
		mod001_desconectoBD( $link );
		
		return $arRetorno;
	}
?>