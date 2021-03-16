topButton = document.getElementById("top-btn");
window.onscroll = function () {scrollFunction();};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    topButton.style.display = "block";
  } else {
    topButton.style.display = "none";
  }
}
function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


function resize(){
    if ($(window).width() < 992) {
        $("#navbar4 .navbar-brand img").attr('src', 'images/pictures/logo3.png');
    } else {
        $("#navbar4 .navbar-brand img").attr('src', 'images/pictures/logo2.png');
    }
}

resize();
$(window).on('resize', resize);
