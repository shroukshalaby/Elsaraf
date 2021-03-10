$(".seller_register").on("submit", function(e){
    e.preventDefault(); 
    $.ajax({
        
        url: 'ajax/buyer.php',
        method: 'POST',
        dataType: 'text',
        data: $( this ).serialize() + "&seller_register=1",
        success: function(response) 
        {
            
        }
    }); 
});