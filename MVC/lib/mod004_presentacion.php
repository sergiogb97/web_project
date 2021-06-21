<?php
	require ("mod003_logica.php");
	
	/**
	  * Crea un formulario para la inserción de datos.
	  *
	  * Recoge $arDataSims llamando a la función mod003_getSimValues(), $arDataProcesadores llamando a
	  * mod003_getProcesadorValues() y $arDataFamilias llamando a mod003_getFamiliaValues(), del modelo 03 todos.
	  * Con estos datos tras todo el código html se crean los select con el contenido de las variables, añadiendo en
	  * el value el id y como option el nombre.
	  *
	  * Creado por Sergio Garcia
	  *
	  * Retorna $insert_form que contiene el formulario de inserción de datos completo.
	  */
	function mod004_getInsertForm() {
		$arDataSims = mod003_getSimValues();
		$arDataProcesadores = mod003_getProcesadorValues();
		$arDataFamilias = mod003_getFamiliaValues();
		$insert_form = "";
		
		$insert_form.= "<div class='data_form'>";
		$insert_form.=	"<form name='grabar_modelo' method='POST' onsubmit='return valide_insert_form();' action='grabar_modelo.php'>";
		$insert_form.=		"<fieldset>";
		$insert_form.=			"<legend>informacion basica</legend>";
		$insert_form.=			"<br>";
		$insert_form.=			"<label><b>Modelo</b><br>";
		$insert_form.=				"<input type='text' placeholder='Nombre' name='modelo' />";
		$insert_form.=			"</label>";
		$insert_form.=			"<br><br>";
		$insert_form.=			"<label><b>Año</b><br>";
		$insert_form.=				"<input type='number' placeholder='YYYY' min='2000' max='2020' name='anio' />";
		$insert_form.=			"</label>";
		$insert_form.=			"<br><br>";
		$insert_form.=			"<label><b>Alto</b><br>";
		$insert_form.=				"<input type='number' placeholder='XXX,X' step='0.1' name='alto' />mm";
		$insert_form.=			"</label>";
		$insert_form.=			"<br><br>";
		$insert_form.=			"<label><b>Ancho</b><br>";
		$insert_form.=				"<input type='number' placeholder='XX,X' step='0.1' name='ancho' />mm";
		$insert_form.=			"</label>";
		$insert_form.=			"<br><br>";
		$insert_form.=			"<label><b>Grosor</b><br>";
		$insert_form.=				"<input type='number' placeholder='X,X' step='0.1' name='grosor' />mm";
		$insert_form.=			"</label>";
		$insert_form.=			"<br><br>";
		$insert_form.=			"<label><b>Peso</b><br>";
		$insert_form.=				"<input type='number' placeholder='XXX' name='peso' />gr";
		$insert_form.=			"</label>";
		$insert_form.=			"<br><br>";
		$insert_form.=			"<label><b>Bateria</b><br>";
		$insert_form.=				"<input type='number' placeholder='XXXX' name='bateria' />mAh";
		$insert_form.=			"</label>";
		$insert_form.=			"<br><br>";
		$insert_form.=		"</fieldset>";
		$insert_form.=		"<br>";
		$insert_form.=		"<p><b>Otros:</b></p>";
		$insert_form.=		"<label>Multisim ";
		$insert_form.=			"<input type='checkbox' name='multisim' value='' />";
		$insert_form.=		"</label>";
		$insert_form.=		"<br>";
		$insert_form.=		"<label>   SD ";
		$insert_form.=			"<input type='checkbox' name='sd' value='' />";
		$insert_form.=		"</label>";
		$insert_form.=		"<br>";
		$insert_form.=		"<label>   Jack ";
		$insert_form.=			"<input type='checkbox' name='jack' value='' />";
		$insert_form.=		"</label>";
		$insert_form.=		"<br><br>";
		$insert_form.=		"<p><b>Tipo SIM</b></p>";
		$insert_form.=		"<select name='sim'>";
		for ( $i = 0; $i < count( $arDataSims); $i++ ) {
			$insert_form.= "<option value='".$arDataSims[ $i ][ 0 ]."'>".$arDataSims[ $i ][ 1 ]."</option>";
		}		
		$insert_form.=		"</select>";
		$insert_form.=		"<br><br>";
		$insert_form.=		"<p><b>Preocesador</b></p>";
		$insert_form.=		"<select name='procesador'>";
		for ( $i = 0; $i < count( $arDataProcesadores); $i++ ) {
			$insert_form.= "<option value='".$arDataProcesadores[ $i ][ 0 ]."'>".$arDataProcesadores[ $i ][ 1 ]."</option>";
		}
		$insert_form.=		"</select>";
		$insert_form.=		"<br><br>";
		$insert_form.=		"<p><b>Familia</b></p>";
		$insert_form.=		"<select name='familia'>";
		for ( $i = 0; $i < count( $arDataFamilias); $i++ ) {
			$insert_form.= "<option value='".$arDataFamilias[ $i ][ 0 ]."'>".$arDataFamilias[ $i ][ 1 ]."</option>";
		}
		$insert_form.=		"</select>";
		$insert_form.=		"<br><br><br>";
		$insert_form.=		"<input type='submit' value='Grabar' />";
		$insert_form.=	"</form>";
		$insert_form.= "</div>";
		
		return $insert_form;
	}
	
	/**
	  * Crea un formulario para la actualización de datos.
	  *
	  * Recoge $arDataModelos llamando a la función mod003_getAllModelos() y $arDataProcesadores llamando a
	  * mod003_getProcesadorValues(), del modelo 03 ambas. Con estos datos se crean los select con el contenido
	  * de las variables, añadiendo en el value el id y como option el nombre. También se crea un input text con
	  * la clase oculto por si se elige un procesador que no esta registrado aún.
	  *
	  * Creado por Sergio García
	  *
	  * Retorna $update_form que contiene el formulario de actualización de datos completo.
	  */
	function mod004_getUpdateForm() {
		$arDataModelos = mod003_getAllModelos();
		$arDataProcesadores = mod003_getProcesadorValues();
		
		$update_form = "";
		
		$update_form.= "<div class='data_form'>";
		$update_form.=	"<form name='actualizar_modelo' method='POST' onsubmit='return valide_update_form();' action='actualizar_modelo.php'>";
		$update_form.=		"<label><b>Modelo</b><br>";
		$update_form.=			"<select name='modelo'>";
		for ( $i = 0; $i < count( $arDataModelos ); $i++ ) {
			$update_form.=			"<option value='".$arDataModelos[ $i ][ 0 ]."'>".$arDataModelos[ $i ][ 1 ]."</option>";
		}
		$update_form.=			"</select>";
		$update_form.=		"</label>";
		$update_form.=		"<br><br>";
		$update_form.=		"<label><b>Procesador</b><br>";
		$update_form.=			"<select name='procesador' onchange='selectValue( this );'>";
		for ( $i = 0; $i < count( $arDataProcesadores ); $i++ ) {
			$update_form.=			"<option value='".$arDataProcesadores[ $i ][ 0 ]."'>".$arDataProcesadores[ $i ][ 1 ]."</option>";
		}
		$update_form.=				"<option value='-1'>Otro</option>";
		$update_form.=			"</select>";
		$update_form.=		"</label>";
		$update_form.=		"<br>";
		$update_form.=		"<label>";
		$update_form.=			"<input type='text' placeholder='Nombre' name='inprocesador' class='oculto'/>";
		$update_form.=		"</label>";
		$update_form.=		"<br><br><br>";
		$update_form.=		"<input type='submit' value='Grabar' />";
		$update_form.=	"</form>";
		$update_form.= "</div>";
		
		
		
		$update_form.= "</div>";
		
		return $update_form;
	}
	
	/**
	  * Llama a mod003_insertarModelo() del modelo03 para insertar los datos pasados como argumento.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @$modelo: nombre del modelo que se desea insertar.
	  * @$anio: anio del modelo que se desea insertar.
	  * @$alto: alto del modelo que se desea insertar.
	  * @$ancho: ancho del modelo que se desea insertar.
	  * @$grosor: grosor del modelo que se desea insertar.
	  * @$peso: peso del modelo que se desea insertar.
	  * @$bateria: bateria del modelo que se desea insertar.
	  * @$multisim: multisim del modelo que se desea insertar.
	  * @$sd: sd del modelo que se desea insertar.
	  * @$jack: jack del modelo que se desea insertar.
	  * @$sim: idsim del modelo que se desea insertar.
	  * @$procesador: idprocesador del modelo que se desea insertar.
	  * @$familia: iffamilia del modelo que se desea insertar.
	  *
	  * Devuelve $idmodelo, el id del modelo que se ha grabado o un mensaje de error si no ha sido posible grabarlo.
	  */
	function mod004_insertarModelo( $modelo, $anio, $alto, $ancho, $grosor, $peso, $bateria, $multisim, $sd, $jack, $sim, $procesador, $familia ) {
		$idmodelo = mod003_insertarModelo( $modelo, $anio, $alto, $ancho, $grosor, $peso, $bateria, $multisim, $sd, $jack, $sim, $procesador, $familia );
		return $idmodelo;
	}
	
	/**
	  * Llama a mod003_deleteModelo() del modelo03 para borrar los datos del modelo con idmodelo pasado como argumento.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @$idmodelo: id del modelo que se desea borrar.
	  *
	  * Devuelve $result, el número de filas afectadas por la query de delete.
	  */
	function mod004_deleteModelo( $idmodelo ) {
		$result = mod003_deleteModelo( $idmodelo );
		return $result;
	}
	
	/**
	  * Crea el div de la paginación.
	  *
	  * Recoge $pag y $pags, uno con la pagina en la que se encuentra y otro con el número de páginas totales respectivamente,
	  * si la página es igual al div de la página que se esta creando la define como pagina_actual.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @$pag: página en la que se encuentra.
	  * @$pags: páginas totales que tiene la paginación.
	  *
	  * Devuelve $paginacion, el div completo con la paginación.
	  */
	function mod004_getPaginacion( $pag, $pags ) {
		$paginacion = "";
		
		$paginacion.= "<div class='paginacion'>";
		for ( $i = 1; $i < ( $pags + 1 ); $i++ ) {
			if ( $pag == $i ) {
				$paginacion.= "<div class='pagina_actual'></div>";
			} else {
				$paginacion.= "<a href='admin.php?pag=".$i."'><div class='pagina'></div></a>";
			}
		}
		$paginacion.= "</div>";
		
		return $paginacion;
	}
	
	/**
	  * Cuenta el número de páginas que totales que va haber.
	  *
	  * Llama a mod003_getNumPaginas() del modelo03 para contar el número de páginas para los modelos.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * Devuelve $pags, el número de páginas total.
	  */
	function mod004_getNumPaginas() {
		$pags = mod003_getNumPaginas();
		return $pags;
	}
	
	/**
	  * Crea el saludo para cuando se logea.
	  *
	  * Crea un div saludo y añade la variable nick del $_SESSION como saludo.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * Devuelve $capaSaludo, el div del login con el saludo.
	  */
	function mod004_getSaludo() {
		$capaSaludo = "<div class='saludo'>";
	    $capaSaludo.=	$_SESSION[ "nick" ];
	    $capaSaludo.= "</div>";
		
		return $capaSaludo;
	}	
		
	/**
	  * Crea el saludo para cuando se logea.
	  *
	  * Crea un div login con los input nick y password, así como el div en el que se hace clic para logearse.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * Devuelve $capaLogin, el div del login.
	  */
	function mod004_getLogin() {
		$capaLogin = "<div class='login'>";
		$capaLogin.= 	"<div class='nick'>";
		$capaLogin.= 		"<input type='text' placeholder='nick' />";
		$capaLogin.= 	"</div>";
		$capaLogin.= 	"<div class='password'>";
		$capaLogin.= 		"<input type='password' placeholder='password' />";
		$capaLogin.= 	"</div>";
		$capaLogin.= 	"<div class='enter'>";
		$capaLogin.= 		"Entrar";
		$capaLogin.= 	"</div>";
		$capaLogin.= "</div>";
		
		return $capaLogin;
	}
	
	/**
	  * Devuelve un array con los datos del login saludo.
	  *
	  * Función que utiliza el controlado AJAX para cuando se logea alguien, llama a mod003_setLogin() del modelo03 pasándole
	  * el nick y la password para comprobar si se ha podido logear o no, si es que sí retorna el array con la información de
	  * que el log ha ido bien y el div login para el hmtl. Si no devuelve el error en el estado para que el controlador sepa
	  * que tiene que mandar un mensaje de error.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @$nick: contiene el nick que ha introducido el usuario en el input.
	  * @$password: contiene la password que ha introducido el usuario en el input.
	  *
	  * Devuelve $arDatosLogin, el div del login con el saludo.
	  */
	function mod004_setLogin( $nick, $password ) {
		$arDatosUsuario = mod003_setLogin( $nick, $password );
		
		if ( $arDatosUsuario[ "idusuario" ] > 0 ) {
			$arDatosLogin[ "estado" ] = "OK";
			$arDatosLogin[ "capaUsuario" ] = "<div class='saludo'>";
			$arDatosLogin[ "capaUsuario" ].= "Conectado como " . $arDatosUsuario[ "nick" ];
			$arDatosLogin[ "capaUsuario" ].= "</div>";
		} else {
			$arDatosLogin[ "estado" ] = "ERROR";
		}
		
		return $arDatosLogin;
	}
	
	/**
	  * Devuelve un array con los datos del login saludo.
	  *
	  * Función que utiliza el controlado AJAX para cuando se logea alguien, llama a mod003_getSOs() del modelo03 pasándole
	  * el nick y la password para comprobar si se ha podido logear o no, si es que sí retorna el array con la información de
	  * que el log ha ido bien y el div login para el hmtl. Si no devuelve el error en el estado para que el controlador sepa
	  * que tiene que mandar un mensaje de error.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @$nick: contiene el nick que ha introducido el usuario en el input.
	  * @$password: contiene la password que ha introducido el usuario en el input.
	  *
	  * Devuelve $arDatosLogin, el div del login con el saludo.
	  */
	function mod004_getSOs() {
		$arDatosSO = mod003_getSOs();
		$divSO = "";
		
		$divSO.= "<div class='cleanSOs'>CLEAN</div>";
		$divSO.= "<div class='SOs'>";
		for ( $i = 0; $i < count ( $arDatosSO ); $i++ ) {
			$divSO.= "<div class='SO' data='".$arDatosSO[ $i ][ 0 ]."'>";
			$divSO.=  $arDatosSO[ $i ][ 1 ];
			$divSO.= "</div>";
		}
		$divSO.= "</div>";
		$divSO.= "<div class='familias'></div>";
		
		return $divSO;
	}
	
	/**
	  * Devuelve un div con el contenido de las familias.
	  *
	  * Función que utiliza el controlado AJAX para cuando se piden las familias de un sistema operativo, llama a mod003_getFamilias() del modelo03
	  * pasándole el idso para que busque las familias de ese sistema operativo. Al crear el div le añade en el data el idfamilia y muestra solo el nombre.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @$idso: contiene el idso en el que se ha hecho clic.
	  *
	  * Devuelve $divFamilia, el div con las familias.
	  */
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
	
	/**
	  * Devuelve un div con el contenido de los modelos.
	  *
	  * Función que utiliza el controlado AJAX para cuando se piden los modelos de una familia, llama a mod003_getModelos() del modelo03
	  * pasándole el idfamilia para que busque los modelos de esa familia. Al crear el div le añade en el data el idmodelo y muestra solo el nombre.
	  *
	  * Creado por Sergio Garcia.
	  *
	  * @$idfamilia: contiene el idfamilia en el que se ha hecho clic.
	  *
	  * Devuelve $divModelo, el div con los modelos.
	  */
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
	
	/**
	  * Devuelve un div con el contenido de la búsqueda.
	  *
	  * Función que utiliza el controlado AJAX para cuando se piden la información de un modelo, llama a mod003_getDataModelo(),
	  * mod003_getImgModelo() y mod003_getNumModelosFamilia() del modelo03
	  
	  *
	  * Creado por Sergio Garcia.
	  *
	  * Devuelve $divModelo, el div con los modelos.
	  */
	function mod004_getDataModelo( $idmodelo, $pag ) {
		$arDataModelo = mod003_getDataModelo( $idmodelo );
		$rutaImg = mod003_getImgModelo( $idmodelo );
		$numModelosFamilia = mod003_getNumModelosFamilia ( $arDataModelo[ 14 ] );
		$divSearch = "";
		
		$divSearch.= "<div id='tabs'>";
		$divSearch.=	"<ul>";
		$divSearch.=		"<li><a href='#tab1'>IMAGEN</a></li>";
		$divSearch.=		"<li><a href='#tab2'>CARACTERISTICAS</a></li>";
		$divSearch.=	"</ul>";
		$divSearch.=	"<div id='tab1'>";
		$divSearch.=		"<div class='imagen'>";
		$divSearch.= 			"<img src='".$rutaImg."' class='img' />";
		$divSearch.=		"</div>";
		$divSearch.=	"</div>";
		$divSearch.=	"<div id='tab2'>";
		$divSearch.= 		"<p>Año: <span>".$arDataModelo[ 2 ]."</span></p>";
		$divSearch.= 		"<p>Características físicas:</p>";
		$divSearch.= 		"<p>Alto: <span>".$arDataModelo[ 3 ]."</span></p>";
		$divSearch.= 		"<p>Ancho: <span>".$arDataModelo[ 4 ]."</span></p>";
		$divSearch.= 		"<p>Grosor: <span>".$arDataModelo[ 5 ]."</span></p>";
		$divSearch.= 		"<p>Peso: <span>".$arDataModelo[ 6 ]."</span></p>";
		$divSearch.= 		"<p>Batería: <span>".$arDataModelo[ 7 ]."</span></p>";
		if ( $arDataModelo[ 8 ] ) {
			$divSearch.= 	"<p><span>Multisim</span></p>";
		}
		if ( $arDataModelo[ 9 ] ) {
			$divSearch.= 	"<p><span>SD</span></p>";
		}
		if ( $arDataModelo[ 10 ] ) {
			$divSearch.= 	"<p><span>Jack</span></p>";
		}
		$divSearch.= 		"<p>Tipo de SIM: <span>".$arDataModelo[ 11 ]."</span></p>";
		$divSearch.= 		"<p>Procesador: <span>".$arDataModelo[ 12 ]."</span></p>";
		$divSearch.= 	"</div>";
		$divSearch.= "</div>";

		return $divSearch;
	}
	
	function mod004_getDataModelos( $pag ) {
		$arDataModelos = mod003_getDataModelos( $pag );
		$tbody = "";
		
		for ( $i = 0; $i < count( $arDataModelos ); $i++ ) {
			$tbody.= "<tr data='".$arDataModelos[ $i ][ 0 ]."'>";
			for ( $j = 1; $j < count( $arDataModelos[ $i ] ); $j++ ){
				$tbody.= "<td>";
				$tbody.= $arDataModelos[ $i ][ $j ];
				$tbody.= "</td>";
			}
			$tbody.= "<td><button class='remove'></button></td>";
			$tbody.= "</tr>";
		}
		return $tbody;
	}
	
	function mod004_getBusqueda( $input ) {
		$arDataSearch = mod003_getBusqueda( $input );
		$divSearch = "";
		
		if ( $arDataSearch[ 0 ][ 0 ] == -1 ) {
			$divSearch.= "<div class='not_found'>";
			$divSearch.= "<p>".$arDataSearch[ 0 ][ 1 ]."</p>";
			$divSearch.= "</div>";
		} else {
			$divSearch.= "<div class='results'>";
			for ( $i = 0; $i < count( $arDataSearch ); $i++ ) {
				$ruta_img = mod003_getImgModelo( $arDataSearch[ $i ][ 0 ] );
				$divSearch.= "<div class='result' data='".$arDataSearch[ $i ][ 0 ]."'>";
				$divSearch.= 	"<div class='imagen'>";
				$divSearch.= 		"<img src='".$ruta_img."' class='img' />";
				$divSearch.=	"</div>";
				$divSearch.=	"<p><span>".$arDataSearch[ $i ][ 1 ]."</span></p>";
				$divSearch.= "</div>";
			}
			$divSearch.= "</div>";
		}
		
		return $divSearch;
	}
	
	function mod004_update_form( $idmodelo, $idprocesador, $nombre ) {
		$result = mod003_update_form( $idmodelo, $idprocesador, $nombre );
		return $result;
	}
	
	function mod004_getListModelos( $pag, $items ) {
		$arDataModelos = mod003_getListModelos( $pag, $items );
		$pags = mod003_getPagsModelos( $items );
		$list = "";
		
		$list.= "<div class='modelos'>";
		for ( $i = 0; $i < count( $arDataModelos ); $i++ ) {
			$list.= "<div class='modelo'>";
			$list.= 	"<div class='imagen'>";
			$list.=			"<img src='".$arDataModelos[ $i ][ 2 ]."' class='img' />";
			$list.=		"</div>";
			$list.=		"<p><span>".$arDataModelos[ $i ][ 1 ]."</span></p>";
			$list.=	"</div>";
		}
		$list.= "</div>";
		
		$list.= "<div class='paginacion'>";
		for ( $i = 1; $i < ( $pags + 1 ); $i++ ) {
			if ( $i == $pag ) {
				$list.= "<div class='pagina_actual' pag='".$i."' items='".$items."'></div>";
			} else {
				$list.= "<div class='pagina' pag='".$i."' items='".$items."'></div>";
			}
		}
		$list.= "</div>";
		
		return $list;
	}
?>
