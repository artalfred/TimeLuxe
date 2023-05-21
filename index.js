// // HIDE NAV ONSCROLL
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("header").style.top = "0rem";
  } else {
    document.getElementById("header").style.top = "-2.6rem";
  }
  prevScrollpos = currentScrollPos;
};
