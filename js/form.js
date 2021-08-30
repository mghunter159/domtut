
$(document).ready(function() {

    $('#btn').click(function() {
    
    if(document.getElementById("name").value == '' || document.getElementById("phone").value == '') {
    
    $('#ModalReq').show(0).delay(3500).hide(0);
    throw "stop";

    }
        $.ajax({
            url: "pages/functions/form.php",
            type: "POST",
            cashe: false,
            data: {
                name: $('#name').val(),
                phone: $('#phone').val()
            },
            success: function(data) {
                $('#name').val('');
                $('#phone').val('');
                $('#ModalSucc').show(0).delay(3500).hide(0);
                throw "stop";
            },
            error: function(data) {
                $('#ModalErr').show(0).delay(3500).hide(0);
                throw "stop";
            }

        });

    });

});


