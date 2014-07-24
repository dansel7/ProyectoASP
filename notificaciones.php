<?php
   include "curl_access.php";
   $auth = new autorizacion("medicina");
   $registro = array();
   $count = 0;
   $arreglo_med = array();
   $end = false;
   $pag =1;
   
   while($end != true){
        $auth->Set_Filtro('?per_page=100&page=' . $pag);
        $jason_decode = $auth->Get_Respuesta_JasonDecode(true); 
        if(!empty($jason_decode))
            array_push($arreglo_med, $jason_decode);
        else $end = true;
        $pag++;
   }
   
   //1 dia=86400
   $meses = 86400 * 186;
   

   
   foreach ($arreglo_med as $k=>$v)
   {
       foreach($v as $key=>$value)
       {
           foreach($value as $kk=>$vv){
                if($kk=='updated_at')
                {
                     //$fecha_actual = strtotime(date("d-m-Y H:i:00",time() - $meses));
                     $fecha_actual = strtotime(date("d-m-Y H:i:00",time() - $meses));
                     $fecha_medicina = strtotime($vv);
                    if($fecha_actual < $fecha_medicina) $count++;
                       
                }
           }
       }
   }

   echo "Existen " . $count . " Actualizaciones Recientes";
   
?>