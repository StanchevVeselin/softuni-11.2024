// JavaScript file
jQuery(document).ready(function ($) {
    $('.like').on('click', function (e) {
        e.preventDefault();
        console.log('clicked'); // just to be sure
        
        let item_id = jQuery(this).attr('data-id'); // we'll need this later

        console.log(item_id);
        
        jQuery.ajax({
            type: 'post',
            dataType: 'json',
            url: my_ajax_object.ajax_url,
            data: {
                action: 'softuni_service_upvote', // PHP function
                item_id: item_id // we need to make this dynamic
            },
            success: function (msg) {
                console.log(msg);
            }
        });
    });
});