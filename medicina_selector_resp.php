<?php
   
   require_once "curl_access.php";
   require_once 'PHPPaging.lib.php';
   require 'body.class.php';
   include "tools.php";

   $paging = new PHPPaging();
   $filtro = array();
   $data_b=null;
   $data_c = null;
   $valor = array();
   $auth = new autorizacion("medicina");
   $body = new body();
   $count = 0;
   $count_m = 0;
   $arreglo_med = array();
   $end = false;
   $pag =1;
   $meses = 86400 * 186;
   session_start();
   set_time_limit(100);
   echo $body->get_head();
   
   if(isset($_REQUEST['busqueda']))
   {
       $data_b= $_REQUEST['busqueda'];
       echo "<br>$data_b";
   }
   
   if(isset($_REQUEST['estado']))
   {
           $valor = $_SESSION['filtrar_med']; 
           echo $body->get_menu();
   }
   else{                
          while($end != true){
                
                $auth->Set_Filtro('?per_page=100&page=' . $pag);
                $auth->Get_AllBusqueda($data_b, 'name');
                $jason_decode = $auth->Get_Respuesta_JasonDecode(true); 
                $end=true;
                if(!empty($jason_decode))
                    array_push($arreglo_med, $jason_decode);
                else $end = true;
                $pag++;
        }
     }
   
   
    $_SESSION['filtrar_med'] = $arreglo_med;
    /*$i=0;
    foreach($arreglo_med as $key=>$value)
    {
        $decode = $value ;
        //print_r($decode);
        foreach($decode as $k=>$v)
        {
            if(!is_array($v)){
                switch ($k)
                {
                    case 'name':
                        $filtro[$i]['nombre'] = $v;
                        break;
                    case 'price':
                        $filtro[$i]['precio'] = $v;
                        break;
                    case 'quantity':
                        $filtro[$i]['cantidad']= $v;
                        break;
                    case 'unit':
                         $filtro[$i]['unidad']= $v;
                    case 'updated_at':
                         $filtro[$i]['fecha']= $v;  
                    default :
                        break;
                }
            }
        }
        $i++;
    }*/
   
    echo "<PRE>";
    print_r($arreglo_med);
    echo "</PRE>";
   
    $paging->porPagina(8);  
    $paging->linkAgregar('&estado=1');
    $paging->agregarArray($arreglo_med);
    $paging->ejecutar(); 
    
 
    /*foreach($paging->fetchTodo() as $key=>$value)
    {
        foreach ($value as $k=>$val)
        {
                switch($k)
                {
                    case 'nombre':
                        echo "<strong>MEDICAMENTO: ". $val . "</strong>";   
                        break;
                    case 'precio':
                         echo "<br>Precio: $". $val . "<br>";
                        break;
                    case 'cantidad':
                        echo "Cantidad: ". $val . "<br>";
                        break;
                    case 'unidad':
                         echo "Unidad: ". $val . "<br>";
                        break;  
                     case 'fecha':
                         echo "Actualizacion: ".date( 'o-W', strtotime( $val) )  . "<br>";
                        break;  
                }  
        }
        
        echo "<br>";
    }
    echo '<br>';
    echo 'Paginas <b>'.$paging->fetchNavegacion() . '</b>';*/

    echo $body->get_feet();  
   
    
?>