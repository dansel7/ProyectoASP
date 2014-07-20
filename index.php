<?php

require_once 'curl_access.php';

$auth = new autorizacion("hidrocarburos_referencia");

$auth->Set_Filtro('?per_page=3&page=1');
//$auth->Set_Filtro('?lt=id&gt=3');
$jason_decode = $auth->Get_Respuesta_JasonDecode(true); 
$jason_encode = $auth->Get_Respuesta_Jason();

print_r($jason_decode);

$busqueda = $auth->Get_busqueda_array($jason_decode , 'id' , '100');
echo "</br ></br ></br >busqueda = " . $busqueda;

echo "</br ></br ></br >total de registros = " . $auth->Get_CountRegistros();
//print_r($jaso_encode);
echo "</br ></br ></br >";
?>

<html>
<head>
    <title>API de Google Maps - Lo básico</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/GoogleMap_Style_InfoUtil.css" type="text/css" media="all" />
</head>
<body>
	<header>
		
	</header>
	
	<div id="wrapper">
		<h1>Geolocalizando al usuario</h1>

		<p>En este ejemplo podemos ver un cómo localizar la posición del usuario.</p>

		<div id="mapa"></div>
		<div id="boton">
			<a href="#" id="localizar">LOCALIZAR</a>
		</div>
	</div>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="js/geolocalizacion.js"></script>
</body>
</html>

