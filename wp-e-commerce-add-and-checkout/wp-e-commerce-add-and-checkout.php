<?php
/*
Plugin Name: WP e-Commerce Add & Go Direct to Checkout Button (shortcode)
Plugin URI: http://www.github.com/bechrissed/blabla
Description: Adds a shortcode to WP E-commerce. So shop owner can add a button that adds a pre defined product to the customer’s shopping cart and go direct to the checkout page.
This is particullary usefull for small shops who sell a single or not too much products who don't need real shopping cart functionality.
Version: 0.1
Author: Chris Koster (@bechrissed)
Author URI: http://www.positivum.nl
License: This is free and unencumbered software released into the public domain. More info: http://unlicense.org/
*/

/**
 * Custom shortcode function added to create a button that adds product to cart and takes customer directly to checkout page.
 */
function wpsc_add_and_go_direct_to_cart_shortcode( $atts ) {
    // extract parameters and substitute defaults if necessary
    extract( shortcode_atts(
        array(
            'class' => '',
                'id' => '0',
                'name' => '',
                'quantity' => '0',
                'value' => 'Add to Cart'
                ),
        $atts )
        );
    // build form for button
    $output = array(
        "<form action='" . get_option( 'shopping_cart_url' ) . "' method='post'>",
        "<input type='hidden' name='wpsc_ajax_action' value='add_to_cart'>",
        "<input type='hidden' name='product_id' value='" . $id . "'>",
        "<input type='hidden' name='quantity' value='" . $quantity . "'>",
        "<input type='submit' id='product__submit_button' class='" . $class . "' name='" . $name . "' value='" . $value . "'>",
        "</form>"
        );
    // return form for output
    return implode( "", $output );
}

add_shortcode( $tag = 'add_and_go_direct_to_cart', $func = 'wpsc_add_and_go_direct_to_cart_shortcode');