<?php
/*
Plugin Name: QuickChat
Text Domain: quickchat
Plugin URI: https://wordpress.org/plugins/quickchat
Description: Injects QuickChat widget to your site.
Version: 1.0.0
Author: quickchat
Author URI: https://quickchat.pro
License: MIT
*/

defined('ABSPATH') or exit;

if (is_admin()) {
    require __DIR__ . '/options.php';
}

add_action('wp_head', function() {
    echo get_option('header_code');
});
