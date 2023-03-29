$(document).ready(function(){
	
	


	$('#btnSendMessage').click(function (e) {
		e.preventDefault();
		if(){
			var message = {
            firstname: $('#firstname').val(),
            lastname: $('#lastname').val(),
            email: $('#email').val(),
            subject: $('#subject').val(),
            message: $('#message').val(),
        };

        $.ajax({
            url : 'http://localhost:3001/contact/',        
            type : 'POST',
            dataType : 'json',
            contentType: 'application/json',
            data : JSON.stringify(message),
            error : function(xhr, status) {
                alert('Disculpe, existió un problema');
            },
            complete : function(xhr, status) {
                $('#alertSuccess').removeClass('d-none');
            }
        });  
		}
    });

    

    
});



    
