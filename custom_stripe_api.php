<?php
/**
 * Plugin Name: Custom Stripe API
 * Description:
 * Version: 1.0.0
 * Text Domain: custom_stripe_api
 * Domain Path: /i18n/languages/
 * Requires at least: 5.2
 * Requires PHP: 7.0
 *
 * @package WooCommerce
 */

defined( 'ABSPATH' ) || exit;

require __DIR__ . '/src/admin/admin-ajax.php';
require __DIR__ . '/src/admin/admin-hooks.php';

register_activation_hook( __FILE__, '_activation_custom_stripe_api' );
function _activation_custom_stripe_api(){
}

register_uninstall_hook( __FILE__, '_uninstall_custom_stripe_api' );
function _uninstall_custom_stripe_api(){
}