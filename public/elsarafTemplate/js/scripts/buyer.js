$(".buyer_register").on("submit", function(e){
    e.preventDefault(); 
    $.ajax({
        
        url: 'ajax/buyer.php',
        method: 'POST',
        dataType: 'text',
        data: $( this ).serialize() + "&buyer_register=1",
        success: function(response) 
        {
         alert(response)   
        }
    }); 
});


//  check email validation and password

$('.buyer_register #buyer_register_from').blur(function () {
    var email = $(this).val();
    var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;
    if (re.test(email)) 
    {
        $('.success_resgister_buyer').show();
        $('.error_resgister_buyer').hide();
        $.ajax({
            url: 'ajax/buyer.php',
            method: 'POST',
            dataType: 'text',
            data: 'check_email=1&email=' + email,
            success: function(response) 
            {
                $('.success_resgister_buyer').html(response); 
            }
        }); 
    } 
    else 
    {
        $('.error_resgister_buyer').show();
        $('.error_resgister_buyer').html('Not a valid email address');
        $('.success_resgister_buyer').hide();
    }
});