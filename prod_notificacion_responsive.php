<?php

require_once('MysqlConexion.class.php');
$bdd = new Consulta();
	
     $sql = "select p.name producto,pb.name marca,ppr.name presentacion,se.name establecimiento,se.id,
pp.price precio,pp.offer_price ofer_precio,pp.probe_date sondeo,
se.latitude,se.longitude
from productprobe pp 
inner join product p on pp.product_id=p.id
inner join productbrand pb on pp.product_brand_id=pb.id
inner join productpresentation ppr on pp.product_presentation_id=ppr.id
inner join shoppingestablishment se on pp.shopping_establishment_id=se.id
where se.name like '%Despensa%' or se.name like '%Super' or se.name like '%Walmart%' or se.name like '%Wallmart%'
order by  pp.probe_date desc, pp.price 
limit 0,10000";
	
	
	$resultado=$bdd->GetConsulta($sql);
	
         while ($a = $bdd->Resultado()) {
	
	foreach ($a as $key => $value) {
	echo $key . "  " . htmlentities($value) . "<br>";
	}
        echo "<br>";
         }
$jason_encode = json_encode($resultado); 



	   
?>