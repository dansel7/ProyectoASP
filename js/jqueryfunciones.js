
    
     //TODO SCRIPT QUE INICIARA POR MEDIO DE JQUERY POR FAVOR COLOCAR ACA

    
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
    
    function h()
    {
        alert();
    }
    
     function carga_notificaciones()
     {
          alert();
     }
    
        