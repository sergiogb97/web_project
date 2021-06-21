<?php
	require ("mod003_logica.php");

	function mod004_getHeaderLinks( $ref ) {
		$data = "";

		$data.= "<div class='header_links'>";
		$data.= 	"<ul>";

		switch ( $ref ) {
			case "tree":
				$data.=			"<li><span>Tree</span></li>";
				$data.= 		"<li><a href='main.php?search'>Search</a></li>";
				$data.= 		"<li><a href='main.php?list'>List</a></li>";
				$data.= 		"<li><a href='main.php?admin'>Admin</a></li>";
			break;
			case "search":
				$data.=			"<li><a href='main.php?tree'>Tree</a></li>";
				$data.= 		"<li><span>Search</span></li>";
				$data.= 		"<li><a href='main.php?list'>List</a></li>";
				$data.= 		"<li><a href='main.php?admin'>Admin</a></li>";
			break;
			case "list":
				$data.=			"<li><a href='main.php?tree'>Tree</a></li>";
				$data.= 		"<li><a href='main.php?search'>Search</a></li>";
				$data.= 		"<li><span>List</span></li>";
				$data.= 		"<li><a href='main.php?admin'>Admin</a></li>";
			break;
			case "admin":
				$data.=			"<li><a href='main.php?tree'>Tree</a></li>";
				$data.= 		"<li><a href='main.php?search'>Search</a></li>";
				$data.= 		"<li><a href='main.php?list'>List</a></li>";
				$data.= 		"<li><span>Admin</span></li>";
			break;
			case "main":
				$data.=			"<li><a href='main.php?tree'>Tree</a></li>";
				$data.= 		"<li><a href='main.php?search'>Search</a></li>";
				$data.= 		"<li><a href='main.php?list'>List</a></li>";
				$data.= 		"<li><a href='main.php?admin'>Admin</a></li>";
			break;
		}
			$data.= 	"</ul>";
			$data.= "</div>";

		return $data;
	}

	function mod004_getBodyTree() {
		$arDatosSO = mod003_getSOs();
		$divTree = "";

		$divTree.= "<div class='wrapper_tree'>";
		$divTree.= "<div class='cleanSOs'>CLEAN</div>";
		$divTree.= "<div class='SOs'>";
		for ( $i = 0; $i < count ( $arDatosSO ); $i++ ) {
			$divTree.= "<div class='SO' data='".$arDatosSO[ $i ][ 0 ]."'>";
			$divTree.=  $arDatosSO[ $i ][ 1 ];
			$divTree.= "</div>";
		}
		$divTree.= "</div>";
		$divTree.= "<div class='familias'></div>";
		$divTree.= "</div>";

		return $divTree;
	}

	function mod004_getFamilias( $idso ) {
		$arDatosFamilia = mod003_getFamilias( $idso );
		$divFamilia = "";

		for ( $i = 0; $i < count ( $arDatosFamilia ); $i++ ) {
			$divFamilia.= "<div class='familia' data='".$arDatosFamilia[ $i ][ 0 ]."'>";
			$divFamilia.=  $arDatosFamilia[ $i ][ 1 ];
			$divFamilia.= "</div>";
		}

		return $divFamilia;
	}

	function mod004_getModelos( $idfamilia ) {
		$arDatosModelo = mod003_getModelos( $idfamilia );
		$divModelo = "";

		for ( $i = 0; $i < count ( $arDatosModelo ); $i++ ) {

			$divModelo.= "<div class='modelo' data='".$arDatosModelo[ $i ][ 0 ]."'>";
			$divModelo.=  $arDatosModelo[ $i ][ 1 ];
			$divModelo.= "</div>";
		}

		return $divModelo;
	}
?>
