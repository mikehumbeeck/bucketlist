$(document).on('ready', function () {
    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('#topBtn').fadeIn();
        } else {
            $('#topBtn').fadeOut();
        }
    });

    //Click event to scroll to top
    $('#topBtn').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
});