(function($){
	var registrandoPosicion = false,
		idRegistroPosicion,
		ultimaPosicionUsuario,
		marcadorUsuario,
		mapa,
		div=document.getElementById('mapa');
	
	mapa = new google.maps.Map(div, {
		zoom : 13,
		center: new google.maps.LatLng(0,0),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});
        
        var request = {
            location: mapa,
            radius: 500,
            types: ['hospital']
        };

	function registrarPosicion() {
		if (registrandoPosicion){
			registrandoPosicion = false;
			navigator.geolocation.clearWatch(idRegistroPosicion);
                        var service = new google.maps.places.PlacesService(map);
                        service.nearbySearch(request, callback);
			limpiarUbicacion();
		}
		else {
			idRegistroPosicion = navigator.geolocation.watchPosition(
				exitoRegistroPosicion,
				falloRegistroPosicion,
				{
					enableHighAccuracy : true,
					maximumAge : 30000,
					timeout : 27000
				}
			);
		}
	}

	function exitoRegistroPosicion(position) {
		console.log('Me llaman');
		if (!registrandoPosicion) { 
			registrandoPosicion = true;
			ultimaPosicionUsuario = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
			marcadorUsuario = new google.maps.Marker({
                position : ultimaPosicionUsuario,
                map : mapa
            });
		}
		else {
			//
			var posicionActual = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
            //if (google.maps.geometry.spherical.computeDistanceBetween(
            //        currentUserLoc, BuSeViCi.lastUserLoc) > BuSeViCi.MAX_DISTANCE){
                ultimaPosicionUsuario = posicionActual;
                marcadorUsuario.setPosition(posicionActual);
            //}
		}
		mapa.panTo(ultimaPosicionUsuario);
	}

	function falloRegistroPosicion() {
		alert('opps!! algo paso ');
		limpiarUbicacion();
	}

	function limpiarUbicacion() {
		ultimaPosicionUsuario = new google.maps.LatLng(0,0);
        if (marcadorUsuario){
            marcadorUsuario.setMap(null);
            marcadorUsuario = null;
        }
	}

	$('#localizar').on('click',function(e){
		e.preventDefault();
		registrarPosicion();
	});
})(jQuery);