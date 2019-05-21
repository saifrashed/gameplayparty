
/**
 * Javascript file stardunks
 */

$( document ).ready(function() {

    /**
     * redirect for single product read
     * @param id
     */
    singleProduct = (id) => {
        console.log(id);
        location.href = '?op=read&id=' + id;
    };


    /**
     * Return home button
     */
    returnHome = () => {
        location.href = '?op=reads';
    };

    formValidation = () => {

    };

    /**
     * Bulk checkboxes
     */
    $('input.bulk-checkbox').click(function () {
        let isChecked = $(this).prop('checked');

        console.log(isChecked);

        if(isChecked) {
            $('.item-checkbox').each(function () {
                $(this).prop("checked", true);
            });
        } else {
            $('.item-checkbox').each(function () {
                $(this).prop("checked", false);
            });
        }
    });

});