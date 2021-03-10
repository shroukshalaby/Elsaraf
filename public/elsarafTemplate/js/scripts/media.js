
// register merging

$(".media_request").on("submit", function(e){ 
    $("#media_subscription").modal('show');
    e.preventDefault(); 
    $.ajax({
        
        url: 'ajax/media.php',
        method: 'POST',
        dataType: 'text',
        data: $( this ).serialize() + "&media_request=1",
        success: function(response) 
        {
            setTimeout(function()
            { 
                $("#media_subscription").modal('hide');
            },4000)
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