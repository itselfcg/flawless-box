$(document).ready(function(){

    $('input[name="paymentMethod"]').click(function(e) {
        if(e.target.value === '1') {
            $('#info').show();
        } else {
            $('#info').hide();
        }
    })


});
