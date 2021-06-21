 <?php
	require ("mod002_accesoadatos.php");

  function mod003_getSOs() {
		$arDatosSO = mod002_getSOs();
		return $arDatosSO;
	}

  function mod003_getFamilias( $idso ) {
		$arDatosFamilia = mod002_getFamilias( $idso );
		return $arDatosFamilia;
	}

  function mod003_getModelos( $idfamilia ) {
		$arDatosModelo = mod002_getModelos( $idfamilia );
		return $arDatosModelo;
	}
?>
