function declararEvento( evento ) {
	switch ( evento ) {
		case "clicSO":
			$( ".SO" ).on( "click", clicSO );
		break;
		case "clicFamilia":
			$( ".familia" ).on( "click", clicFamilia );
		break;
		case "clicCleanSOs":
			$( ".cleanSOs" ).on( "click", clicCleanSOs );
		break;
	}
}
