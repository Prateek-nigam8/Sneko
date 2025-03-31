$(document).ready(function(){
    $("#contact-form button.submit").click(function(e){
        e.preventDefault();
        
        // Clear previous messages
        $(".form-messege").removeClass('text-success text-danger').empty();
        
        var form = $("#contact-form");
        var formData = form.serialize();
        
        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: formData,
            success: function(response){
                $(".form-messege").text(response.success).addClass('text-success').fadeIn();
                form[0].reset();
            },
            error: function(xhr){
                var errors = xhr.responseJSON.errors;
                var errorString = '';
                
                if(errors) {
                    $.each(errors, function(key, value){
                        errorString += value + '<br>';
                    });
                } else {
                    errorString = 'An error occurred. Please try again later.';
                }
                
                $(".form-messege").html(errorString).addClass('text-danger').fadeIn();
            }
        });
    });
});