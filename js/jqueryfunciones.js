
    
     //TODO SCRIPT QUE INICIARA POR MEDIO DE JQUERY POR FAVOR COLOCAR ACA
        
        $(document).ready(function() {    
      
     //PAGINACION DE MEDICAMENTOS
      /*  $('.paginate').live('click', function(){

        $('#informacion-medicamentos').html('<div><img src="images/loading.gif" width="70px" height="70px"/></div>');

        var page = $(this).attr('data');        
        var dataString = 'page='+page;

        $.ajax({
                type: "GET",
                url: "medicina_responsive.php",
                data: dataString,
                success: function(data) {
                $('#informacion-medicamentos').fadeIn(1000).html(data);
            }
           });
        });   */
         
        //OBTIENE LA SELECCION Y LUEGO DE LA SELECCION ENVIA LOS DATOS EN AJAX 
        $("#medicina_select").change(function () {
             var seleccion = $("#medicina_select").val();
             $( "#informacion-medicamentos" ).html('<div><img src="images/loading.gif" width="70px" height="70px"/></div>');
        });
        
    });    
        