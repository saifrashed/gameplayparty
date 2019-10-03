

var btn = $('.btn-menu');
var menu = $('.menu');

btn.on('click', function() {
    menu.toggleClass('menu-open');

    $(this).toggleClass('active');
    $(this).toggleClass('not-active');
});

var quill = new Quill('#editor', {
    theme: 'snow'
});
