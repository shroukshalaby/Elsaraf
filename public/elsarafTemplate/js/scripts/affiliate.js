$(".affiliate_register").on("submit", function(e){
    e.preventDefault(); 
    $.ajax({
        
        url: 'ajax/affiliate.php',
        method: 'POST',
        dataType: 'text',
        data: $( this ).serialize() + "&affiliate_register=1",
        success: function(response) 
        {
         alert(response)   
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
        $('.error_resgister_buyer').hide();
        $.ajax({
            url: 'ajax/affiliate.php',
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

$('input[name="phone"]').blur(function () {
    var phone = $(this).val();
    var phones = /^\d{10}$/;
    if (phones.test(phone)) 
    {
        console.log('error')
        $.ajax({
            url: 'ajax/affiliate.php',
            method: 'POST',
            dataType: 'text',
            data: 'check_phone=1&phone=' + phone,
            success: function(response) 
            {
                
            }
        }); 
    } 
    else 
    {
        // alert('هذا الرقم موجود من قبل ')
    }
});