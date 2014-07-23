<?php

   require_once "curl_access.php";
   require_once 'PHPPaging.lib.php';
   require 'body.class.php';
    

   $paging = new PHPPaging();
   $filtro = array();
   $data_b=null;
   $data_c = null;
   $valor = array();
   $auth = new autorizacion("medicina");
   $body = new body();
   session_start();
   
   echo $body->get_head();
   
   if(!isset($_REQUEST['busqueda']))
   {
       if(isset($_REQUEST['estado']))
        {
            $valor = $_SESSION['filtrar']; 
             echo $body->get_menu();
        }
        else{
            echo "busqueda no encontrada ...";
            return;
        }
   }else
   {
       $data_b= $_REQUEST['busqueda'];
   }

   if(isset($_REQUEST['categoria']))
   {
       $data_c = $_REQUEST['categoria'];
   }
   else
   {
       if(isset($_REQUEST['estado']))
        {
            $valor = $_SESSION['filtrar']; 
             echo $body->get_menu();
        }
        else{
            echo "medicinas no encontradas ....";
            return;
        }
   }
   
   if($data_c != null || $data_b != null)
   {
       if ($data_c != null) {
        $auth->Get_AllBusquedaNumber($data_c, 'medicine_category_id');
    } else {
        $auth->Get_AllBusquedaNumber($data_b, 'name');
    }

    $jason_decode = $auth->Get_Respuesta_JasonDecode(true); 
        $valor = $jason_decode;
   }
   
    $i=0;
    foreach($valor as $key=>$value)
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
                    default :
                        break;
                }
            }
        }
        $i++;
    }
    
    $_SESSION['filtrar'] = $filtro;
    $paging->porPagina(8);  
    $paging->linkAgregar('&estado=1');
    $paging->agregarArray($filtro);
    $paging->ejecutar(); 
    
 
    foreach($paging->fetchTodo() as $key=>$value)
    {
        foreach ($value as $k=>$val)
        {
            if($k=='nombre')
            {
                echo "<strong>". $val . "</strong>";         
            }
            else{
                if($k=='precio')
                    echo "<br>". $val . "<br></p>";
                else
                    echo "<br>". $val . "<br></p>";
            }
        }
    }
    echo '<br>';
    echo 'Paginas <b>'.$paging->fetchNavegacion() . '</b>';

    echo $body->get_feet();  
   

?>