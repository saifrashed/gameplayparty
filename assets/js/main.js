

var btn = $('.btn');
var menu = $('.menu');

btn.on('click', function() {

    console.log('hey');

    menu.toggleClass('menu-open');

    $(this).toggleClass('active');
    $(this).toggleClass('not-active');
});
