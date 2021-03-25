$(document).ready(function(){

    $("#btnEditAccount").on('click', function() {
        $("#edit-profile").show();
        $("#profile").hide();

        return false;
    });

    $("#btnEditPassword").on('click', function() {
        $("#edit-password").show();
        $("#profile").hide();

        return false;
    });

    $("#btnEditAddress").on('click', function() {
        $("#edit-address").show();
        $("#address").hide();

        return false;
    });

    $("#btnEditPlan").on('click', function() {
        $("#edit-plan").show();
        $("#plan").hide();

        return false;
    });



    $(".btnBackProfile").on('click', function() {
        $("#edit-password").hide();
        $("#edit-profile").hide();
        $("#profile").show();

        return false;
    });

    $(".btnBackAddress").on('click', function() {
        $("#edit-address").hide();
        $("#address").show();

        return false;
    });


    $(".btnBackPlan").on('click', function() {
        $("#edit-plan").hide();
        $("#plan").show();

        return false;
    });


});
