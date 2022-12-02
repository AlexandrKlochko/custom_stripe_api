jQuery(document).ready(function ($) {
    $('select[name="stripe_api_type"]').on('change',function(){
        $('.stripe_api_key_row').hide();
        $('.stripe_api_key_row-'+$(this).val()).fadeIn();
    });
    $('select[name="stripe_api_type"]').trigger('change');
    $('#stripe_settings_form').submit(function(event){
        event.preventDefault();
        var phForm = $(this);
        $.ajax({
            url : phForm.attr('action'),
            data : phForm.serialize(),
            type : 'POST',
            success : function( response ){
                alert('Saved');
            }
        });

        return false;
    });
});