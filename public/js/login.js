
function resize(){
    if ($(window).width() < 992) {
        $("#navbar4 .navbar-brand img").attr('src', 'images/pictures/logo3.png');
    } else {
        $("#navbar4 .navbar-brand img").attr('src', 'images/pictures/logo2.png');
    }
}

resize();
$(window).on('resize', resize);
