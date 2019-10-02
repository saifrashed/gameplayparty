

var btn = $('.btn-menu');
var menu = $('.menu');

btn.on('click', function() {
    menu.toggleClass('menu-open');

    $(this).toggleClass('active');
    $(this).toggleClass('not-active');
});

// var headerLogo = $('header.main-header .header-logo img');
// var hasScrolled = false;
//
// $(window).scroll(function () {
//    if(window.pageYOffset > 0 && !hasScrolled) {
//        hasScrolled = true;
//    } else {
//        hasScrolled = false;
//    }
//
//    if(hasScrolled) {
//        headerLogo.addClass('minimize-logo');
//    }
// });
