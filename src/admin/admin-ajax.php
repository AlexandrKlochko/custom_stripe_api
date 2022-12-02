<?php
if(wp_doing_ajax()){
    add_action('wp_ajax_save_custom_stripe_api_settings','save_custom_stripe_api_settings_handler');
    function save_custom_stripe_api_settings_handler(){
        $data = $_POST;

        update_option('custom_stripe_api_type',$data['stripe_api_type']);
        update_option('custom_stripe_api_secret_key',$data['stripe_api_key']);
        update_option('custom_stripe_api_test_key',$data['stripe_api_test_key']);

        $responce = array('success' => true);
        echo json_encode($responce);
        wp_die();
    }
}