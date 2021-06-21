<?php
	require( "../lib/mod004_presentacion.php" );

	$accion = $_POST[ "accion" ];

	switch ( $accion ) {
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
		case "getBodyTree":
			$datos = mod004_getBodyTree();
			echo $datos;
		break;
		default:
			echo "Acción no permitida";
		break;
	}
?>
