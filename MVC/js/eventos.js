/**
  * Hace visible el overlay.
  *
  * Recoge los nodos del overlay y el formulario, le quita la clase oculto al overlay para que se vea
  * el formulario y defino el evento salirOverlay cuando se hace click fuera del formulario.
  *
  * Creado por Sergio Garcia.
  *
  * No devuelve nada.
  */
function crearFormulario() {
	var overlay, overlayOver, form;
	
	overlay = document.getElementsByClassName( "over_form" );
	overlay[0].classList.remove( "oculto" );
	window.scrollTo( 0, 0 );
	overlayOver = document.getElementsByClassName( "over_form" );
	form = document.getElementsByClassName( "form" );
	overlayOver[ 0 ].onclick = salirOverlay;
	form[ 0 ].onclick = salirOverlay;
}

/**
  * Oculta el overlay añadiendo la clase oculto al overlay.
  *
  * Creado por Sergio Garcia.
  *
  * No devuelve nada.
  */
function salirOverlay( e ) {
	e.stopPropagation();
	if ( this.className == "over_form" ) {
		this.classList.add( "oculto" );
	} 
}

/**
  * Validación del formulario de inserción.
  *
  * Recoge el value de todos los input de tipo text, se limpia el estilo y se comprueba que ninguno está vacío, si es así
  * se añade el estilo para marcar que ese input no es válido y bvalidacion pasa a ser false y el retorno es false. Para que
  * retorne true todos los input han de tener contenido.
  *
  * Creado por Sergio Garcia.
  *
  * Devuelve bValidacion en función de si ha ido bien (true) o no (false);
  */
function valide_insert_form() {
	var bvalidacion = true;

	var modelo, anio, alto, ancho, grosor, peso, bateria;
	
	modelo = document.grabar_modelo.modelo.value;
	anio = document.grabar_modelo.anio.value;
	alto = document.grabar_modelo.alto.value;
	ancho = document.grabar_modelo.ancho.value;
	grosor = document.grabar_modelo.grosor.value;
	peso = document.grabar_modelo.peso.value;
	bateria = document.grabar_modelo.bateria.value;

	document.grabar_modelo.modelo.style.border = "";
	document.grabar_modelo.anio.style.border = "";
	document.grabar_modelo.alto.style.border = "";
	document.grabar_modelo.ancho.style.border = "";
	document.grabar_modelo.grosor.style.border = "";
	document.grabar_modelo.peso.style.border = "";
	document.grabar_modelo.bateria.style.border = "";

	if ( modelo == "" ) {
		document.grabar_modelo.modelo.style.border = "1px solid red";
		bvalidacion = false;
	}
	if ( anio == "" ) {
		document.grabar_modelo.anio.style.border = "1px solid red";
		bvalidacion = false;
	}
	if ( alto == "" ) {
		document.grabar_modelo.alto.style.border = "1px solid red";
		bvalidacion = false;
	}
	if ( ancho == "" ) {
		document.grabar_modelo.ancho.style.border = "1px solid red";
		bvalidacion = false;
	}
	if ( grosor == "" ) {
		document.grabar_modelo.grosor.style.border = "1px solid red";
		bvalidacion = false;
	}
	if ( peso == "" ) {
		document.grabar_modelo.peso.style.border = "1px solid red";
		bvalidacion = false;
	}
	if ( bateria == "" ) {
		document.grabar_modelo.bateria.style.border = "1px solid red";
		bvalidacion = false;
	}
	
	return bvalidacion;
}

/**
  * Validación del formulario de actualización.
  *
  * Recoge el value del select del procesador, si es -1 significa que ha elegido "otro" y no un procesador ya
  * existente, si es así se recoge el valor del input de tipo texto del nuevo procesador y comprueba que haya introducido algo,
  * si no lo ha hecho bValidacion pasa a ser false y se añade el estilo de error.
  *
  * Creado por Sergio Garcia.
  *
  * Devuelve bValidacion en función de si ha ido bien (true) o no (false);
  */
function valide_update_form() {
	var bvalidacion = true;

	var procesador;
	
	procesador = document.actualizar_modelo.procesador.value;
	
	if ( procesador == -1 ) {
		var inprocesador = document.actualizar_modelo.inprocesador.value;
		document.actualizar_modelo.inprocesador.style.border = "";
		if ( inprocesador == "" ) {
			document.actualizar_modelo.inprocesador.style.border = "1px solid red";
			bvalidacion = false;
		}
	}

	return bvalidacion;
}

/**
  * Copia el data del tr al pulsar el borrar al boton de confirmar.
  *
  * Captura el data que contiene el tr en el que esta contenido el botón de borrar, para pasarle ese mismo data que contiene
  * el idmodelo al botón de confirmar. Así este mismo puede lanzar el delete contra el idmodelo que tiene él mismo en data.
  *
  * Creado por Sergio Garcia.
  *
  * No devuelve nada.
  */
function cpData() {
	var idmodelo;
	
	idmodelo = $( this ).parent().parent().attr( "data" );
	$( ".verificar .ask .yes" ).attr( "data", idmodelo );
	$( ".verificar" ).removeClass( "oculto" );
}

/**
  * Llama a AJAX para que ejecute la función correspondiente para borrar un modelo de la base de datos.
  *
  * Captura el data que contiene el idmodelo del div al hacer clic para borrar un modelo, llama a AJAX
  * ejecutando deleteModelo y pasándole el idmodelo para que él llame al modelo04. Si la llamada va mal
  * crea un alert de error y si no busca en la tabla los tr con el mismo data que ha recogido al principio
  * para borrar ese tr entero, ya que es el tr del modelo que se acaba de borrar. Por último le quita la clase
  * oculto al overlay de confirmación de borrado.
  *
  * Creado por Sergio Garcia.
  *
  * No devuelve nada.
  */
function borrarCampo() {
	var idmodelo = $( this ).attr( "data" );
	var datos = "accion=deleteModelo&idmodelo=" + idmodelo;
	$.ajax ( {
		type: "POST",
		url: "ajax/controladorAJAX.php",
		data: datos,
		error: function() {
			alert ("Se ha producido un error.");
		},
		success: function ( data, textStatus ) {
			$( "div.table table tr" ).each( function ( index ) {
				if ( $( this ).attr( "data" ) == idmodelo ) {
					$( this ).remove();
				}
			});
			removeOcult();
		}   
	});	
}

/**
  * Quita el data del botón de confirmar y la clase oculto del overlay de confirmación de borrado.
  *
  * Creado por Sergio Garcia.
  *
  * No devuelve nada.
  */
function removeOcult() {
	$( ".ask .yes" ).removeAttr( "data" );
	$( ".verificar" ).addClass( "oculto" );
}

/**
  * Llama a AJAX para que ejecute la función correspondiente para comprobar un login.
  *
  * Captura el nick y password de los input text del login, hecho esto pasa a AJAX la accion login con el nick y password incluidos.
  * AJAX llama a la función del modelo04 correspondiente para comprobar si ese nick y esa password estan registrados y si es así transforma
  * el retorno de AJAX por JSON. Recoge la url de la página en la que nos nos encontramos, y si ésta es denied.php nos redirecciona a amin.php
  * directamente, si no es así oculta el login y añade al header el valor del retorno de AJAX de capaUsuario que es un saludo con el nick.
  * Si no están registrados vacía los input y muestra un alert de contraseña incorrecta.
  *
  * Creado por Sergio Garcia.
  *
  * No devuelve nada.
  */
function login() {
	var nick, password, datos;
	
	nick = $( ".login .nick input[type='text']" ).val();
	password = $( ".login .password input[type='password']" ).val();
	datos = "accion=login&nick=" + nick + "&password=" + password;
	
	$.ajax ( {
		type: "POST",
		url: "ajax/controladorAJAX.php",
		data: datos,
		error: function() {
			alert ("Se ha producido un error.");
		},
		success: function ( dataAjax, textStatus ) {
			data = JSON.parse( dataAjax );
			if ( data[ "estado" ] == "OK" ) {
				
				if  ( window.location.href == "http://localhost/smartphones/denied.php" || window.location.href == "https://localhost/smartphones/denied.php" ) {
				window.location.assign ( "http://localhost/smartphones/admin.php" );
				}
				
				$( ".login" ).addClass ( "oculto" );
				$( "header" ).append ( data[ "capaUsuario" ] );
			} else {
				$( ".nick input" ).val ( "" );
				$( ".password input" ).val ( "" );
				
				alert ( "Contraseña incorrecta\nInténtelo de nuevo" );
			}		
		}   
	});
}

/**
  * Llama a AJAX para que añada las familias del SO que he pinchado.
  *
  * Captura el idso que se encuentra en el data del div del SO y el div en el que he hecho clic. Llama a AJAX para recoger el data
  * de las familias que pertenecen a ese SO. Si va mal lanza un mensaje de error, si no vacía el div familias, borra el div modelos
  * y searchs si existieran y añade el data que ha devuelto AJAX a familias. Añade el div modelos (vacío) al main y le quita la clase
  * selected a los hijos del div en el que he pinchado y se la añade a él mismo. Por último declara el evento clicFamilia ya que lo
  * había borrado al vaciar el div familias.
  *
  * Creado por Sergio Garcia.
  *
  * No devuelve nada.
  */
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
			$( "main" ).append ( "<div class='modelos'></div>" );
			$( nodo ).parent().children().removeClass( "selected" );
			$( nodo ).addClass( "selected" );
			
			declararEvento( "clicFamilia" );	
		}   
	});
}

/**
  * Llama a AJAX para que añada los modelos de la familia que he pinchado.
  *
  * Captura el idfamilia que se encuentra en el data del div de la familia y el div en el que he hecho clic. Llama a AJAX para recoger el data
  * de los modelos que pertenecen a esa familia. Si va mal lanza un mensaje de error, si no vacía el div modelos, borra el div searchs
  * y añade el data que ha devuelto AJAX a modelos. Añade el div searchs (vacío) al main y le quita la clase
  * selected a los hijos del div en el que he pinchado y se la añade a él mismo. Por último declara el evento clicModelo ya que lo
  * había borrado al vaciar el div familias.
  *
  * Creado por Sergio Garcia.
  *
  * No devuelve nada.
  */
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
			$( "main" ).append ( "<div class='searchs'></div>" );
			$( nodo ).parent().children().removeClass( "selected" );
			$( nodo ).addClass( "selected" );
			
			declararEvento( "clicModelo" );
		}   
	});
}

/**
  * Llama a AJAX para que añada la información del modelo que he pinchado.
  *
  * Captura el idmodelo que se encuentra en el data del div del modelo y el div en el que he hecho clic. Llama a AJAX para recoger el data
  * del modelo. Si va mal lanza un mensaje de error, si no vacía el div searchs, borra el div searchs y añade el data que ha devuelto AJAX
  * a searchs. Le quita la clase selected a los hijos del div en el que he pinchado y se la añade a él mismo. Por último declara los eventos
  * clicModelo y clicOtro ya que lo había borrado al vaciar el div searchs. Y define por último el tab en el que va el data de AJAX.
  *
  * Creado por Sergio Garcia.
  *
  * No devuelve nada.
  */
function clicModelo() {
	var datos = "accion=getDataModelo&idmodelo=" + $( this ).attr( "data" );
	var nodo = $( this );

	$.ajax ( {
		type: "POST",
		url: "ajax/controladorAJAX.php",
		data: datos,
		error: function() {
			alert ("Se ha producido un error.");
		},
		success: function ( data, textStatus ) {
			$( ".searchs" ).empty();
			$( ".searchs" ).append ( data );
			$( nodo ).parent().children().removeClass( "selected" );
			$( nodo ).addClass( "selected" );
			declararEvento( "clicModelo" );
			declararEvento( "clicOtro" );
			$( "#tabs" ).tabs();
		}   
	});
}

/**
  * Borra toda la consulta de datos y deja sólo el nivel inicial.
  *
  * Elimina la clase selected de los SO, vacía el div familias y elimina los div modelos y searchs si existen.
  *
  * Creado por Sergio Garcia.
  *
  * No devuelve nada.
  */
function clicCleanSOs() {
	$( ".SO" ).removeClass( "selected" );
	$( ".familias" ).empty();
	$( ".modelos" ).remove();
	$( ".searchs" ).remove();
}

/**
  * Comprueba que se haya pulsado la tecla enter, si es así llama a la función buscar() pasándole como argumento el
  * value del input.
  *
  * Creado por Sergio Garcia.
  *
  * No devuelve nada.
  */
function keyPressSearch() {
	if( event.keyCode == 13 ) {
		buscar( $(this).val() );
    }
}

/**
  * Búsca en la base de datos lo que el usuario envía.
  *
  * Llama a getBusqueda de AJAX pasándole el input del usuario, si algo va mal crea un alert con un error y si no
  * elimina el div results y el div not_found por si hubiera una búsqueda anterior. Hecho esto le añade al main el
  * data recibido de AJAX que contiene las coincidencias de la búsqueda o el not found.
  *
  * Creado por Sergio Garcia.
  *
  * @(input): recibe como argumento el input del usuario.
  *
  * No devuelve nada.
  */
function buscar( input ) {
	var datos = "accion=getBusqueda&input=" + input;

	$.ajax ( {
		type: "POST",
		url: "ajax/controladorAJAX.php",
		data: datos,
		error: function() {
			alert ("Se ha producido un error.");
		},
		success: function ( data, textStatus ) {
			$( ".results" ).remove();
			$( ".not_found" ).remove();
			$( "main" ).append ( data );
		}   
	});
}

/**
  * Crea el formulario necesario para un insert o un update.
  *
  * Llama a AJAX con get más el formulario que necesitamos presente en el data del div en el que hemos pinchado,
  * si va mal se crea un alert de error y si no, se elimina el data_form del overlay de formulario por si ya hubiera
  * uno creado y se añade el retorno de AJAX, que contiene el data_form nuevo. Por último se llama a la función crearFormulario()
  * para que sea visible el overlay del formulario.
  *
  * Creado por Sergio Garcia.
  *
  * No devuelve nada.
  */
function getFormulario() {
	var formulario, datos;
	
	formulario = $( this ).attr( "data" );
	datos = "accion=get" + formulario + "Form";
	
	$.ajax ( {
		type: "POST",
		url: "ajax/controladorAJAX.php",
		data: datos,
		error: function() {
			alert ("Se ha producido un error.");
		},
		success: function ( data, textStatus ) {
			$( ".over_form .form .data_form" ).remove();
			$( ".over_form .form" ).append ( data );
			crearFormulario();
		}   
	});
}

/**
  * Muestra u oculta el input text del procesador en el formulario actualizar.
  *
  * Si el valor del select es -1, significa que se quiere registrar un nuevo procesador, por ello se elimina la clase oculto
  * del nodo input text del formulario para que se pueda usar y se pueda escribir el nuevo procesador que se desea añadir. Si no
  * se añade la clase oculto por si se había pulsado en otro y luego se cambia de opinión.
  *
  * Creado por Sergio Garcia.
  *
  * No devuelve nada.
  */
function selectValue( select ) {
	nodo = $( ".data_form input[name=inprocesador]" );
	if ( select.value == -1 ) {
		$( nodo ).removeClass( "oculto" );
	} else {
		$( nodo ).addClass( "oculto" );
	}
}

/**
  * Devuelve los datos que necesita AJAX para la paginación.
  *
  * Recoge los atributos pag e items del nodo que recibe como parámetro, en el que has pinchado, y crea la variable datos que es lo
  * que se le va a pasar a AJAX.
  *
  * Creado por Sergio Garcia.
  *
  * @( nodo ): recibe el nodo en el que se hizo clic antes de llamar a la función o el select si se cambió el valor.
  *
  * Retorna la variable datos.
  */
function getData( nodo ) {
	var pag = $( nodo ).attr( "pag" );
	var items = $( nodo ).attr( "items" );
	var datos = "accion=paginacion&pag=" + pag + "&items=" + items;
	
	return datos;
}

/**
  * Actualiza los modelos y la paginación.
  *
  * Recibe el nodo donde se hizo clic o el nodo select desde el que se cambió el items de la paginación, dependiendo de si
  * es uno u otro se llama al getData() con el this o el nodo. Una vez recogido el data el data, se le envia a AJAX donde si
  * da error por algún motivo lanza un alert de error y si no vacía el sublist y añade el retorno de AJAX con los modelos y la
  * paginación correspondiente. Por último define el clicPag de nuevo.
  *
  * Creado por Sergio Garcia.
  *
  * @( nodo ): recibe el nodo en el que se hizo clic antes de llamar a la función o el select si se cambió el valor.
  *
  * No devuelve nada.
  */
function clicPag( nodo ) {
	var datos;
	
	if ( typeof nodo == "object" ) {
		datos = getData( $( this ) );
	} else {
		datos = getData( nodo );
	}

	$.ajax ( {
		type: "POST",
		url: "ajax/controladorAJAX.php",
		data: datos,
		error: function() {
			alert ("Se ha producido un error.");
		},
		success: function ( data, textStatus ) {
			$( ".sublist" ).empty();
			$( ".sublist" ).append ( data );
			
			declararEvento( "clicPag" );
		}   
	});
}

/**
  * Le añade el atributo items a la paginación si cambia el valor del select.
  *
  * Le da el nuevo valor del select a items y le añade ese items como atributo al pagina y pagina_actual que están en la
  * paginación para que tengan el data correcto. Por último llama al clicPag como si hubieramos cambiado de página para
  * que recargue la paginación y los modelos.
  *
  * Creado por Sergio Garcia.
  *
  * @( select ): recibe el select en el que se ha modificado el valor del items.
  *
  * No devuelve nada.
  */
function selectItems( select ) {
	var items = select.value;

	$( ".pagina" ).attr( "items", items );
	$( ".pagina_actual" ).attr( "items", items );
	clicPag( ".paginacion div:eq(0)" )
}