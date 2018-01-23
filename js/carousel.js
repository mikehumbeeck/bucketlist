$(document).on('ready', function () {

    $('.regular').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    var thema;
    $(".themawrapper").on("hover", function () {
        thema = $(this).data("thema");
        $("#themetitle span").html(thema);
    }).on("click", function () {
        $(".list .row").hide();
        $(".list ." + thema).fadeIn("slow");

    })


});