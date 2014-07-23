
<?php

include "curl_access.php";
$auth = new autorizacion("medicina");

//$auth->Set_Filtro('?per_page=100&page=3');

//PARA PROBAR PONER ASI /prueba_policia.php?kw=frijol
//SINO ESTA PREDETERMINADO QUE BUSQUE ARROZ POR EL MOMENTO


$valor=isset($_GET['kw'])?$_GET['kw']:'1';

$auth->Get_AllBusquedaNumber($valor , 'medicine_category_id');


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