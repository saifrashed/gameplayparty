var btn  = $('.btn-menu');
var menu = $('.menu');

/**
 *  Shows the menu on menu toggle click.
 */
btn.on('click', function () {
    menu.toggleClass('menu-open');

    $(this).toggleClass('active');
    $(this).toggleClass('not-active');
});


/**
 * Initializes Quill Rich text editor
 *
 * @type {Quill}
 */
var quill = new Quill('#editor', {
    theme: 'snow'
});


/**
 * Sends Author changes in Quill in POST for further database processing.
 *
 * @type {Element}
 */
var form      = document.querySelector('#editor-form');
form.onsubmit = function () {
    // Populate hidden form on submit
    var content   = document.querySelector('input[name=content]');
    content.value = JSON.stringify(quill.root.innerHTML);

    var url  = "./?op=author";
    var data = stringify(quill.getContents());
    alert("the data is " + data);
    $.ajax({
        type: "POST",
        url:  url,
        data: content,

        success: function () {
            alert("Successfully sent to database");
        },
        error:   function () {
            alert("Could not send to database");
        }
    });

    return false;
};
