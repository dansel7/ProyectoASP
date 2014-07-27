<?php

$latitude=isset($_POST["lat"])?$_POST["lat"]:0;
$longitude=isset($_POST["lon"])?$_POST["lon"]:0;

require_once('MysqlConexion.class.php');
$bdd = new Consulta();
	
     $sql = "select se.latitude,se.longitude from productprobe pp 
inner join product p on pp.product_id=p.id
inner join productbrand pb on pp.product_brand_id=pb.id
inner join productpresentation ppr on pp.product_presentation_id=ppr.id
inner join shoppingestablishment se on pp.shopping_establishment_id=se.id
where (se.latitude>$latitude and se.latitude<($latitude + 0.1) ) and (se.longitude<$longitude and se.longitude>($longitude - 0.1)) and  (se.name like '%Despensa%' or se.name like '%Selectos%' or se.name like '%Super' or se.name like '%Walmart%' or se.name like '%Wallmart%')
group by se.id";
	
	
	$resultado=$bdd->GetConsulta($sql);
	$array_prod=array();
        
        while($bdd->Resultado()) {
            array_push($array_prod, $bdd->Resultado());
        }
        
        foreach($array_prod as $key=>$value)
    {
        $decode = $value ;
        foreach($decode as $k=>$v)
        {
            if(!is_array($v)){
                switch ($k)
                {
                    case 'lon':
                        echo "<strong>Producto: $v </strong><br>";
                        break;
                    case 'marca':
                        echo "Marca: $v <br>";
                        break;
                    case 'presentacion':
                         echo "Presentacion: $v <br>";
                        break;
                    case 'precio':
                        echo "Precio: $v <br>";
                    case 'ofer_precio':
                         echo "Precio de Venta: $v <br>";;  
                    case 'sondeo':
                         echo "Fecha Sondeo: $v <br>";
                    default :
                        break;
                }
                
            }
           
        }
         echo "<br>";
    }
        
       
?>