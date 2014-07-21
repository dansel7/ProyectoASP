 
 
 $(document).ready(function() {
        $(".boton").click(function(event) {
        var parametros = {
                'info' : informacion
        };
        $.ajax({
                data:  parametros,
                url:    r,
                type:  'post',
                beforeSend: function () {
                        $("#informacion").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#informacion").html(response);
                }
       });
    });
    
 });
