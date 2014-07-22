<?php


   include "curl_access.php";
   $auth = new autorizacion("products");

  //$auth->Set_Filtro('?per_page=100&page=1');
    $valor=isset($_GET['kw'])?$_GET['kw']:"arroz";

    $auth->Get_AllBusqueda($valor , 'name');


//$auth->Set_Filtro('?lt=id&gt=3');
$jason_decode = $auth->Get_Respuesta_JasonDecode(true); 
$jason_encode = $auth->Get_Respuesta_Jason();

/*echo "<PRE>";
print_r($jason_decode);
echo "</PRE>";*/

echo $jason_encode;
?>