<?php

include "curl_access.php";
$page = isset($_GET['p'])?$_GET['p']:2;
$start = ($page-1)*10;

$productos = new autorizacion("products");
$establecimientos=new autorizacion("establecimiento");
$marcasProd=new autorizacion("marcasProd");
$Prod_sondeo = new autorizacion("product_probes");

$productos->Set_Filtro('?per_page=10&page=1');
$productos->get_Busqueda_Dinamico(array('frijol','azucar','arroz'),'name','cont_any');

//$prodPrecioJson = $Prod_sondeo->Get_Respuesta_JasonDecode(true);
$productosJson = $productos->Get_Respuesta_JasonDecode(true); 
//$establecJson = $establecimientos->Get_Respuesta_JasonDecode(true); 
//$marcasProdJson = $marcasProd->Get_Respuesta_JasonDecode(true); 

/*
  $registro = array();
   $count = 0;
   $count_m = 0;
   $arreglo_prod = array();
   $arreglo_establec = array();
   $arreglo_marca = array();
   $end = false;
   $pag =1;
   
   //set_time_limit(100);
   
   while($end != true){
        $productos->Set_Filtro('?per_page=100&page=' . $pag);
        $jason_decode = $productos->Get_Respuesta_JasonDecode(true); 
        if(!empty($jason_decode))
            array_push($arreglo_prod, $jason_decode);
        else $end = true;
        $pag++;
   }
    $pag =1;
  while($end != true){
        $establecimientos->Set_Filtro('?per_page=100&page=' . $pag);
        $jason_decode = $establecimientos->Get_Respuesta_JasonDecode(true); 
        if(!empty($jason_decode))
            array_push($arreglo_establec, $jason_decode);
        else $end = true;
        $pag++;
   }
    $pag =1;
     while($end != true){
        $marcasProd->Set_Filtro('?per_page=100&page=' . $pag);
        $jason_decode = $marcasProd->Get_Respuesta_JasonDecode(true); 
        if(!empty($jason_decode))
            array_push($arreglo_marca, $jason_decode);
        else $end = true;
        $pag++;
   }
   */
$i=0;
foreach($productosJson as $key=>$value)
    {
        $decode = $value ;
        
        foreach($decode as $k=>$v)
        {
            if(!is_array($v)){
                switch ($k) 
               {
                     case 'name':
                        $filtro[$i]['name'] = $v ;
                        break;
                     case 'id':
                        $Prod_sondeo->Get_AllBusquedaNumber( $v , 'product_id');
                        $Prod_sondeo->get_Busqueda_Dinamico('', 'price','present');
                        $array=$Prod_sondeo->Get_Respuesta_JasonDecode(true);
                       //echo "<br><br>";
                       // if(!empty($array)){
                        $filtro[$i]['precio'] = $array[0]['price']; 
                        $filtro[$i]['precio_venta'] = $array[0]['offer_price']; 
                        $filtro[$i]['sondeo'] = $array[0]['probe_date']; 
                        $filtro[$i]['update'] = $array[0]['updated_at'];
                        //}
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