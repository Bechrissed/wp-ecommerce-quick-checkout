=== WP e-Commerce Add & Go Direct to Checkout Button ===
Contributors: Chris Koster
Tags: wp-ecommerce, shortcode, direct checkout, button, wordpress shopping cart
Requires at least: 3.2
Tested up to: 3.8
Stable tag: 3.8

Adds a shortcode to WP E-commerce. So shop owner can add a button that adds a pre defined product to the customer’s shopping cart and go direct to the checkout page.

== Description ==

https://github.com/Bechrissed/wp-ecommerce-quick-checkout

== Installation ==

1. Upload the folder 'wp-e-commerce-add-and-checkout' to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add shortcode to your page

For use in template:

<?php echo do_shortcode("[add_and_go_direct_to_cart class='submit' id=607 quantity=7 name='checkout' value='Go to checkout']"); ?>

or in Wordpress editor:

[add_and_go_direct_to_cart class='submit' id=607 quantity=7 name='checkout' value='Go to checkout']

Where ID = WP E-commerce product ID and optionally you can set the quatity.

== Support ==

If you have any problems, questions or suggestions please contact me on the following page:

http://www.positivum.nl/

== Changelog ==

= 0.1 =
* First working release of the Plugin