
// register resources


$(".register_resources").on("submit", function(e){
    $("#resources_popups").modal('hide');
    e.preventDefault(); 
    $.ajax({
        
        url: 'ajax/resources.php',
        method: 'POST',
        dataType: 'text',
        data: $( this ).serialize() + "&resources_register=1",
        success: function(response) 
        {
         alert(response)   
        }
    }); 
});

$(".login_resourrces").on("submit", function(e){
    $("#resources_popups").modal('hide');
    e.preventDefault(); 
    $.ajax({
        
        url: 'ajax/resources.php',
        method: 'POST',
        dataType: 'text',
        data: $( this ).serialize() + "&resources_login=1",
        success: function(response) 
        {
           
        }
    }); 
});


//  check email validation and password

$('input[name="email"]').blur(function () {
    var email = $(this).val();
    var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;
    if (re.test(email)) 
    {
        $('.success_resgister_buyer').show();
        $('.success_resgister_buyer').html('A valid email address! ');
        $('.error_resgister_buyer').hide(); 
    } 
    else 
    {
        $('.error_resgister_buyer').show();
        $('.error_resgister_buyer').html('Not a valid email address');
        $('.success_resgister_buyer').hide();
    }
});