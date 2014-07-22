
$(document).ready(function() {    
    $('.paginate').live('click', function(){

        $('#informacion-medicamentos').html('<div><img src="images/loading.gif" width="70px" height="70px"/></div>');

        var page = $(this).attr('data');        
        var dataString = 'page='+page;

        $.ajax({
            type: "GET",
            url: "medicina_responsive.php",
            data: dataString,
            success: function(data) {
                $('#content').fadeIn(1000).html(data);
            }
        });
    });              
});    