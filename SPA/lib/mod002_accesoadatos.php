 <?php
	require ("mod001_conexion.php");

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
?>
