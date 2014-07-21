<?php



/*require_once 'curl_access.php';

$auth = new autorizacion("delegacion_info");

$auth->Set_Filtro('?per_page=100&page=18');


//$auth->Set_Filtro('?lt=id&gt=3');
$jason_decode = $auth->Get_Respuesta_JasonDecode(true); 
$jason_encode = $auth->Get_Respuesta_Jason();

print_r($jason_decode);

$busqueda = $auth->Get_busqueda_array($jason_decode , 'id' , '100');
echo "</br ></br ></br >busqueda = " . $busqueda;

echo "</br ></br ></br >total de registros = " . $auth->Get_CountRegistros();
//print_r($jaso_encode);
echo "</br ></br ></br >";*/
?>

<html>
<head>
    <title>API de Google Maps - Lo b�sico</title>
    <meta charset="utf-8">
     <style>
      html, body, #map-canvas {
        height: 75%;
        margin: 50px;
        padding: 40px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
    <script type="text/javascript" src="js/geolocalizacion.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
    <script src="js/jquery-1.8.2.min.js"></script>

    
    <script>
    set_tipo('police');
    initialize();

</script>
</head>
<body>
    <div id="informacion-police">
       
    </div>
    <div id="map-canvas-p" ></div>
</body>
</html>

