<?php
/**
* Plugin Name: driveworks
* Plugin URI: https://www.driveworks.com/
* Description: This is the very first plugin I ever created.
* Version: 1.0
* Author: driveworks
* Author URI: http://driveworks.com/
**/


header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
header('Pragma: no-cache'); // HTTP 1.0.
header('Expires: 0'); // Proxies.

add_action( 'rest_api_init', 'my_register_route' );

function my_register_route() {

    register_rest_route( 'drive_works', 'get_order', array(
            'methods' => 'POST',
            'callback' => 'custom_phrase',
        )
    );
}

function custom_phrase() {
    //:: @houssem todo get product_name product_description product_img( url or base64) , create media , ceate ecommerce_product
}

