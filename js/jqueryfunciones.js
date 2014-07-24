
    
     //TODO SCRIPT QUE INICIARA POR MEDIO DE JQUERY POR FAVOR COLOCAR ACA
     $(document).ready(function() {    
      
        //PAGINACION DE MEDICAMENTOS
        //OBTIENE LA SELECCION Y LUEGO DE LA SELECCION ENVIA LOS DATOS EN AJAX 
      
       /* $("#medicina_select").change(function () {
            
            var categoria = $("#medicina_select").val();
            get_medicina(categoria);
        });*/
         
          
        $("#txt_med").keyup(function () {
          alert();                      
          var valor = $("#txt_med").val();
          get_medicina(null,valor);
         });

    }); 
    
    function get_medicina(categoria , busqueda)
    {
         var parametros = {
                'categoria' : categoria,
                'busqueda' : busqueda
            };
            
           $.ajax({
                data:  parametros,
                url:   'medicina_responsive.php',
                type:  'post',
                beforeSend: function () {
                    $( "#informacion-medicamentos" ).html('<div><img src="images/loading.gif" width="70px" height="70px"/></div>');     
                },
                success:  function (response) {
                     $( "#informacion-medicamentos" ).html(response);
                 }
                
            });
    }
        
function goToByScroll(id){
	$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}

var loadcontent = function(p, num_total){
	
	$("#more-items").remove();
	num = ((p - 1) * 10) + 1;
	pag = p + 1;
	num_ini = num;
	
	$.ajax({
		type: "POST",
		url : 'prod_notificacion_responsive.php?p='+p,
		async: true,
		success : function (datos){
			var dataJson = eval(datos);
				
			for(var i in dataJson){
				$("#list-items").append('<li id="item-' + num +'">' 
                                   +'<h5 style="margin-bottom:0">' +  dataJson[i].producto +'</h5>' +
                                    'Marca: ' + dataJson[i].marca +'<br>' +
                                    'Precio: $' + dataJson[i].price +'<br>' +
                                    'Lugar: ' + dataJson[i].establecimiento +'<br>' +
                                    'Sondeo: ' + dataJson[i].sondeo.substr(0,10) + '<br>'
                                    );
					
				num++;
			}
			if(num<num_total){
				$("#list-items").append('<li id="more-items">' +
					'<a href="#" onclick="loadcontent('+ pag +','+ num_total +')">Cargar mas ...</a>' +
           			'</li>');
					
			}
			goToByScroll("item-"+num_ini);
		}
	});
	return false;	
};
        