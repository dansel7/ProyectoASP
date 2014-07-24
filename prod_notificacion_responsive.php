<?php

include "curl_access.php";
$page = isset($_GET['p'])?$_GET['p']:2;
$start = ($page-1)*10;

$productos = new autorizacion("products");
$establecimientos=new autorizacion("establecimiento");
$marcasProd=new autorizacion("marcasProd");
$Prod_sondeo = new autorizacion("product_probes");

$Prod_sondeo->Set_Filtro('?per_page=5&page=1');

$productosJson = $productos->Get_Respuesta_JasonDecode(true); 
$prodPrecioJson = $Prod_sondeo->Get_Respuesta_JasonDecode(true); 
$establecJson = $establecimientos->Get_Respuesta_JasonDecode(true); 
$marcasProdJson = $marcasProd->Get_Respuesta_JasonDecode(true); 	

$i=0;
foreach($prodPrecioJson as $key=>$value)
    {
        $decode = $value ;
        
        foreach($decode as $k=>$v)
        {
            if(!is_array($v)){
                switch ($k) 
                {
                    case 'product_id':
                        $productos->Get_AllBusquedaNumber( $v , 'id');
                        $name=$productos->Get_Respuesta_JasonDecode(true);
                        $filtro[$i]['producto'] = $name[0]['name']; 
                        break;
                     case 'price':
                        $filtro[$i]['price'] = $v ;
                        break;
                    case 'product_brand_id':
                        $marcasProd->Get_AllBusquedaNumber( $v , 'id');
                        $name=$marcasProd->Get_Respuesta_JasonDecode(true);
                        $filtro[$i]['marca'] = $name[0]['name'];   
                        break;
                    case 'shopping_establishment_id':
                        $establecimientos->Get_AllBusquedaNumber( $v , 'id');
                        $name=$establecimientos->Get_Respuesta_JasonDecode(true);
                        $filtro[$i]['establecimiento'] =$name[0]['name'];   
                        break;
                     case 'updated_at':
                        $filtro[$i]['sondeo'] = $v;
                        break;
                    default :
                        break;
                }
            }
        }
        $i++;
    }
    
$num_rows = $Prod_sondeo->Get_CountRegistros();
$jason_encode = json_encode($filtro); 


echo $jason_encode;
	
?>