/**
 *
 *  sticky navigation
 *
 */

let navbar = $(".header-nav");

$(window).scroll(function () {
  // get the complete hight of window
  // let oTop = $(".sticky-end").offset().top - window.innerHeight;
  if ($(window).scrollTop() > 500) {
    navbar.addClass("sticky");
  } else {
    navbar.removeClass("sticky");
  }
});

$('.more-button').click(function(){$('html,body').animate({scrollTop:$('.section-1').offset().top}, 800);});



