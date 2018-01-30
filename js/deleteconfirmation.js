$(document).ready(function () {
    $("#deleteUser").on("click", function () {
        $(".cover").fadeIn('slow');
        $(".popup").fadeIn('slow');
    });
    $(".deleteCancel").on("click", function () {
        $(".cover").fadeOut('slow');
        $(".popup").fadeOut('slow');
        $('#nav-icon4').removeClass("open");
    });
    $(".cover").on("click", function () {
        $(".cover").fadeOut('slow');
        $(".popup").fadeOut('slow');

    });
})