$(window).scroll(function() {
    $(".slideanim").each(function(){
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
            $(this).addClass("slide");
        }
    });
});

$(window).scroll(function() {
    $(".my-arrow").each(function(){
        var pos = $(this).offset().top;

        var winTop = $(window).scrollTop();
        if (pos < winTop + 50) {
            $(this).addClass("my-arrow-invis");
        }
        if (pos > winTop + 300) {
            $(this).removeClass("my-arrow-invis");
        }
    });
});

