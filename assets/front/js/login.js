$('#login_result').hide();
$('#form_login').submit(function(e) {
    e.preventDefault();
    formData = new FormData($(this)[0]);
    $.ajax({
        url: root+'index.php/login/ajax/submit',
            type: 'POST',
            data: formData,
            async:false,
            cache:false,
            processData: false,
            contentType: false,
            success:function (data) {
                $('#login_result').empty();
                $('#login_result').removeClass('alert-success');
                $('#login_result').removeClass('alert-danger');
                if ( data.stat == true ) {
                    $('#login_result').show();
                    $('#login_result').addClass('alert-success');
                    $('#login_result').html(data.text);
                    setTimeout(  function(){ 
                        window.location = root+"index.php/buku";
                    }, 3000); 
                }else{
                    $('#login_result').show();
                    $('#login_result').addClass('alert-danger');
                    $('#login_result').html(data.text);
                }
            }
    });
    return false;
});