// value button of page

$(".merging").click(function(){
    var data = $(this).data('id');
    console.log(data)
    $("#merging_type_user").val(data);
});

// register merging


$(".order_now_popup").on("submit", function(e){
    $("#order-now-popup").modal('hide')
    e.preventDefault(); 
    $.ajax({
        
        url: 'ajax/merging.php',
        method: 'POST',
        dataType: 'text',
        data: $( this ).serialize() + "&merging_reuest=1",
        success: function(response) 
        {
         alert(response)   
        }
    }); 
});


//  check email validation and password

$('.order_now_popup input[name="email"]').blur(function () {
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