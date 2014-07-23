
    
     //TODO SCRIPT QUE INICIARA POR MEDIO DE JQUERY POR FAVOR COLOCAR ACA
     $(document).ready(function() {    
      
        //PAGINACION DE MEDICAMENTOS
        //OBTIENE LA SELECCION Y LUEGO DE LA SELECCION ENVIA LOS DATOS EN AJAX 
      
       /* $("#medicina_select").change(function () {
            
            var categoria = $("#medicina_select").val();
            get_medicina(categoria);
        });*/
        
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
        