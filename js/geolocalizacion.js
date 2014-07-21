var placeTypes = [
'accounting',
'airport',
'amusement_park',
'aquarium',
'art_gallery',
'atm',
'bakery',
'bank',
'bar',
'beauty_salon',
'bicycle_store',
'book_store',
'bowling_alley',
'bus_station',
'cafe',
'campground',
'car_dealer',
'car_rental',
'car_repair',
'car_wash',
'casino',
'cemetery',
'church',
'city_hall',
'clothing_store',
'convenience_store',
'courthouse',
'dentist',
'department_store',
'doctor',
'electrician',
'electronics_store',
'embassy',
'establishment',
'finance',
'fire_station',
'florist',
'food',
'funeral_home',
'furniture_store',
'gas_station',
'general_contractor',
'grocery_or_supermarket',
'gym',
'hair_care',
'hardware_store',
'health',
'hindu_temple',
'home_goods_store',
'hospital',
'insurance_agency',
'jewelry_store',
'laundry',
'lawyer',
'library',
'liquor_store',
'local_government_office',
'locksmith',
'lodging',
'meal_delivery',
'meal_takeaway',
'mosque',
'movie_rental',
'movie_theater',
'moving_company',
'museum',
'night_club',
'painter',
'park',
'parking',
'pet_store',
'pharmacy',
'physiotherapist',
'place_of_worship',
'plumber',
'police',
'post_office',
'real_estate_agency',
'restaurant',
'roofing_contractor',
'rv_park',
'school',
'shoe_store',
'shopping_mall',
'spa',
'stadium',
'storage',
'store',
'subway_station',
'synagogue',
'taxi_stand',
'train_station',
'travel_agency',
'university',
'veterinary_care',
'zoo'];


var iconos =[
    'images/google_icon/hospital.png',
    'images/google_icon/policia.png',
    'images/google_icon/educacion.png'
];


var rutas= [
    'police_responsive.php',
    'hospital_responsive.php'
];

var map;
var infowindow;
var latitud;
var longitud;
var tipo = '';
var ruta = '';
var marker=[];

function set_tipo(t)
{
    window.tipo=t;
}

function set_request()
{
    return window.tipo;
}

function get_localizacion() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(mostrar_coordenadas);
    } else {
    }
}

function mostrar_coordenadas(position) {

    
  latitud = position.coords.latitude;
  longitud = position.coords.longitude;
  var pyrmont = new google.maps.LatLng(latitud,longitud);
  
 
  switch(window.tipo)
    {
        case 'police':
             map = new google.maps.Map(document.getElementById('map-canvas-p'), {
             center: pyrmont,
             zoom: 15
            });    
            break;
        case 'hospital':
            map = new google.maps.Map(document.getElementById('map-canvas-h'), {
            center: pyrmont,
            zoom: 15
            });
            break;
    }

 
  
  //keyword: 'best view' para ver los mejores segun google
  

  var request = {
  
    location: pyrmont,
    radius: 1000,
    types: [tipo]
    
  };
  
  infowindow = new google.maps.InfoWindow();
  var service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, callback);
}


function initialize() {
  
  get_localizacion();
}

var objeto = [];
function callback(results, status) {
  if (status == google.maps.places.PlacesServiceStatus.OK) {
     for (var i = 0; i < results.length; i++) {
      createMarker(results[i]);
      objeto[i] = results[i];
    }
  }else{
     //INICIALIZA EL ARREGLO DE INFORMACION
     objeto = []; 
  }

  get_informacion(objeto);
}

var object__ = new Array();
function get_informacion(objeto)
{   //INICIALIZA EL ARREGLO DE INFORMACION
    if(objeto.length==0) object__ = new Array();
     var string_jason = '';
     for (var i = 0; i < objeto.length; i++){
             string_jason +=JSON.stringify(objeto[i]);
             object__[i]= JSON.stringify(objeto[i]);
            //document.getElementById('informacion-police').innerHTML+=JSON.stringify(objeto[i]);
        }
    var estatus =0;
    switch(window.tipo)
    {
        case 'police':
            estatus=0;
            window.ruta=window.rutas[0];
            break;
        case 'hospital':
            estatus=1;
            window.ruta=window.rutas[1];
            break;
    }
 
    realizaProceso(object__ , window.ruta , estatus);
}

function get_informacion_jsoncode()
{
    return object__;
}


//creacion del canvas o lienzo tambien edicion de la imagen o icono
function createMarker(place) {
    
   var i=0;
   switch(tipo)
   {
       case 'hospital':
           i=0;
           break;
       case 'police':
           i=1;
           break;
       case 'school':
            i=2;
            break;
       default:
           break;
   }

   var imagen = new google.maps.MarkerImage(iconos[i],
    new google.maps.Size(100,50)
   ); 
    
   window.marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location,
        icon:imagen
   });

  google.maps.event.addListener(marker, 'click', function() {
    infowindow.setContent(place.name);
    infowindow.open(map, this);
  });
}

  
   function realizaProceso(informacion , r , estatus){
        
        
        var parametros = {
                'info' : informacion
        };
        $.ajax({
                data:  parametros,
                url:    r,
                type:  'post',
                beforeSend: function () {
                    if(estatus===0){
                        $("#informacion-police").html("Procesando, espere por favor...");
                    }
                    else if (estatus===1)
                         $("#informacion-hospital").html("Procesando, espere por favor...");
                        
                },
                success:  function (response) {
                     if(estatus===0){
                        $("#informacion-police").html('');
                        $("#informacion-police").html(response);
                    }
                    else if (estatus===1){
                         $("#informacion-hospital").html('');
                        $("#informacion-hospital").html(response);
                    }
                }
       });
}




// google.maps.event.addDomListener(window, 'load', initialize);
