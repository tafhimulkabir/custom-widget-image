<?php
/*
Plugin Name: Custom Widget Image
Version: 1.0
Plugin URI: https://wordpress.org/plugins/custom_widget_image/
Author: Tafhimul kabir
Author URI: http://www.upwork.com/o/profiles/users/_~01a0097719a5f77810/
Description: Custom Widget Image is a very easy and quick way to add images to your widget area. When activated custom widget image plugin you will see a custom widget called Image Uploader in the widget area.
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: cwi, custom widget image, image uploader widget, wp image widget, wordpress image widget
*/

# Exit if accessed directly ...
if ( !defined ( 'ABSPATH' ) ) {
    exit;
}

# Including external file ...
function cwi_enqueue_script () {
  wp_enqueue_script( 'cwi-image-uploader-script', plugins_url( 'cwi_iu.js', __FILE__ ), array ( 'jquery' ), '1.0.0', true );
}
add_action( 'admin_enqueue_scripts', 'cwi_enqueue_script' );

//require_once ( plugin_dir_path(__FILE__) . 'cwi_iu.php' );
require_once ( plugin_dir_path(__FILE__) . 'cwi_cw.php' );
