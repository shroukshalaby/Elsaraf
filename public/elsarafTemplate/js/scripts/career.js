$("#applaycareer").submit(function(e){
    $('#apply_job').modal('hide');
    e.preventDefault(e);
    $('.loader').modal('show');
    $('.lds-ring').show();
    
    $.ajax({
        url:"ajax/career.php",
        // dataType:'json',
        type:"POST",
        // data:$(this).serialize(),
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success:function(response){
            alert(response)
            $('.loader').modal('hide');
            $('.lds-ring').hide();
        }
    })
}); 