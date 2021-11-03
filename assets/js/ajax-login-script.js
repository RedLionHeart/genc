jQuery(document).ready(function($) {
    // Perform AJAX login on form submit
    const form = $('#formModalpasswork form');
    form.on('submit', function(e){
        form.find('.status').text('');
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_login_object.ajaxurl,
            data: {
                'action': 'ajaxlogin', //calls wp_ajax_nopriv_ajaxlogin
                'mail': form.find('#mail-passwork').val(),
                'password': form.find('#passwork').val(),
                'security': form.find('#security').val() },
            success: function(data){
                form.find('.status').text(data.message);
                if (data.loggedin == true){
                    document.location.href = ajax_login_object.redirecturl;
                }
            }
        });
        e.preventDefault();
    });

});