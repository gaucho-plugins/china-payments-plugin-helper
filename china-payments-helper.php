<?php
/**
 * Plugin Name: China Payments Plugin - Helper
 * Plugin URI: https://chinapaymentsplugin.com
 * Description: Easily accept WeChat, Alipay & Credit Card payments from Chinese customers in a simple payment form.
 * Version: 1.0.0
 * Author: Gaucho Plugins
 * Author URI: https://gauchoplugins.com
 * License: GPLv3
 * Text Domain: china-payments
 * Domain Path: /languages/
 */

if( isset( $_GET[ 'update_credentials_stripe' ] ) ) {
  add_action( "init", function() {
    ChinaPayments\Settings::instance()->update( [
      'stripe_test_public_key'    => '',
      'stripe_test_secret_key'    => '',
      'stripe_live_public_key'    => '',
      'stripe_live_secret_key'    => '',      
    ] );
    exit;
  });
}
