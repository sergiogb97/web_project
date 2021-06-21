/**
  * Funcion que se ocupa de dar a cada elemento del DOM su evento previamente definido en
  * la vista de cada controlador. 
  *
  * Emplea jquery para acceder a los elementos del DOM.
  *
  * Creado por Sergio Garcia
  *
  * @"crearFormulario": define la llamada a la función crearFormulario() al hacer clic en los
  * div con la clase add_form.
  *
  * @"cpData": define la llamada a la función cpData() al hacer clic en los
  * div con la clase remove.
  *
  * @"borrarCampo": define la llamada a la función borrarCampo() al hacer clic en los
  * div con la clase yes.
  *
  * @"removeOcult": define la llamada a la función removeOcult() al hacer clic en los
  * div con la clase no.
  *
  * @"login": define la llamada a la función login() al hacer clic en los
  * div con la clase enter.
  *
  * @"clicSO": define la llamada a la función clicSO() al hacer clic en los
  * div con la clase SO.
  *
  * @"clicFamilia": define la llamada a la función clicFamilia() al hacer clic en los
  * div con la clase familia.
  *
  * @"clicModelo": define la llamada a la función clicModelo() al hacer clic en los
  * div con la clase modelo.
  *
  * @"clicCleanSOs": define la llamada a la función clicCleanSOs() al hacer clic en los
  * div con la clase cleanSOs.
  *
  * @"keyPressSearch": define la llamada a la función keyPressSearch() al pulsar cualquier tecla en el
  * input de tipo text del div con la clase campobusqueda.
  *
  * @"getFormulario": define la llamada a la función getFormulario() al hacer clic en los
  * div con la clase add_form.
  *
  * @"clicPag": define la llamada a la función clicPag() al hacer clic en los
  * div con la clase pagina.
  */
function declararEvento( evento ) {
	switch ( evento ) {
		case "crearFormulario":
			$( ".add_form" ).on( "click", crearFormulario );
		break;
		case "cpData":
			$( ".remove" ).on( "click", cpData );
		break;
		case "borrarCampo":
			$( ".ask .yes" ).on( "click", borrarCampo );
		break;
		case "removeOcult":
			$( ".ask .no" ).on( "click", removeOcult );
		break;
		case "login":
			$( ".enter" ).on( "click", login );
		break;
		case "clicSO":
			$( ".SO" ).on( "click", clicSO );
		break;
		case "clicFamilia":
			$( ".familia" ).on( "click", clicFamilia );
		break;
		case "clicModelo":
			$( ".modelo" ).on( "click", clicModelo );
		break;
		case "clicCleanSOs":
			$( ".cleanSOs" ).on( "click", clicCleanSOs );
		break;
		case "keyPressSearch":
			$( ".campobusqueda input[type='text']" ).on( "keyup", keyPressSearch );
		break;
		case "getFormulario":
			$( ".add_form" ).on( "click", getFormulario );
		break;
		case "clicPag":
			$( ".pagina" ).on( "click", clicPag );
		break;
	}
}