<?php

function enqueue_custom_stripe_api()
{
    wp_register_script('custom_stripe_api-admin-scripts', plugins_url('custom_stripe_api/assets/js/admin-scripts.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('custom_stripe_api-admin-scripts');
}


add_action('admin_menu', '_custom_stripe_api_admin_menu');
function _custom_stripe_api_admin_menu()
{
    $menu = add_menu_page('Stripe API Settings', 'Stripe API Settings', 'edit_theme_options', 'stripe-api-settings', '_custom_stripe_api_settings_page');

    add_action('admin_print_scripts-' . $menu, 'enqueue_custom_stripe_api');
}

function _custom_stripe_api_settings_page()
{
    if (!current_user_can('edit_theme_options')) {
        wp_die(__('Sorry, you are not allowed to manage options for this site.'));
    }
    $options = array(
        'stripe_api_type' => get_option('custom_stripe_api_type'),
        'stripe_api_key' => get_option('custom_stripe_api_secret_key'),
        'stripe_api_test_key' => get_option('custom_stripe_api_test_key'),
    );

    set_query_var('options', $options);
    require_once WP_PLUGIN_DIR . '/custom_stripe_api/templates/admin/admin-options.php';
}

