<?php


require_once 'curl_access.php';

$auth = new autorizacion("delegacion_info");

$auth->Set_Filtro('?per_page=100&page=18');


//$auth->Set_Filtro('?lt=id&gt=3');
$jason_decode = $auth->Get_Respuesta_JasonDecode(true); 
$jason_encode = $auth->Get_Respuesta_Jason();

echo "<PRE>";
print_r($jason_decode);
echo "</PRE>";

//$busqueda = $auth->Get_busqueda_array($jason_decode , 'id' , '100');
//echo "</br ></br ></br >busqueda = " . $busqueda;

//echo "</br ></br ></br >total de registros = " . $auth->Get_CountRegistros();
//print_r($jaso_encode);
echo "</br ></br ></br >";
?>