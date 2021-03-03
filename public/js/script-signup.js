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