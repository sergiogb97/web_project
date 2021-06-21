function getBodyTree() {
  var datos = "accion=getBodyTree";

  $.ajax ( {
		type: "POST",
		url: "ajax/controladorAJAX.php",
		data: datos,
		error: function() {
			alert ("Se ha producido un error.");
		},
		success: function ( data, textStatus ) {
      $( "body" ).append( data );
      declararEvento( "clicCleanSOs" );
      declararEvento( "clicSO" );
		}
	});
}

function clicCleanSOs() {
	$( ".SO" ).removeClass( "selected" );
	$( ".familias" ).empty();
	$( ".modelos" ).remove();
	$( ".searchs" ).remove();
}

function clicSO() {
	var datos = "accion=getFamilias&idso=" + $( this ).attr( "data" );
	var nodo = $( this );

	$.ajax ( {
		type: "POST",
		url: "ajax/controladorAJAX.php",
		data: datos,
		error: function() {
			alert ("Se ha producido un error.");
		},
		success: function ( data, textStatus ) {
			$( ".familias" ).empty();
			$( ".modelos" ).remove();
			$( ".searchs" ).remove();
			$( ".familias" ).append ( data );
			$( ".wrapper_tree" ).append ( "<div class='modelos'></div>" );
			$( nodo ).parent().children().removeClass( "selected" );
			$( nodo ).addClass( "selected" );

			declararEvento( "clicFamilia" );
		}
	});
}

function clicFamilia() {
	var datos = "accion=getModelos&idfamilia=" + $( this ).attr( "data" );
	var nodo = $( this );

	$.ajax ( {
		type: "POST",
		url: "ajax/controladorAJAX.php",
		data: datos,
		error: function() {
			alert ("Se ha producido un error.");
		},
		success: function ( data, textStatus ) {
			$( ".modelos" ).empty();
			$( ".searchs" ).remove();
			$( ".modelos" ).append ( data );
			$( nodo ).parent().children().removeClass( "selected" );
			$( nodo ).addClass( "selected" );
		}
	});
}

function getBodyMain() {
  var bodyMain = "";

  bodyMain+= "<div class='wrapper_main'>";
  bodyMain+= "<p>Estas en la página principal</p>";
  bodyMain+= "<p>Prueba a hacer clic en algún link de los de arriba</p>";
  bodyMain+= "<p>:)</p>";
  bodyMain+= "</div>";

  $( "body" ).append( bodyMain );
}
