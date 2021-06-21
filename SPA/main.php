<?php
	require ("lib/mod004_presentacion.php");

	$ref = $_SERVER['QUERY_STRING'];
	switch ( $ref ) {
		case "tree":
			$header_links = mod004_getHeaderLinks( "tree" );
		break;
		case "search":
			$header_links = mod004_getHeaderLinks( "search" );
		break;
		case "list":
			$header_links = mod004_getHeaderLinks( "list" );
		break;
		case "admin":
			$header_links = mod004_getHeaderLinks( "admin" );
		break;
		default:
			$header_links = mod004_getHeaderLinks( "main" );
		break;
	}

	require ("vista/vista_main.php");
?>
