<?php

/**
 * Template Name: Custom Checkout
 */

get_header();

// Check if WooCommerce is active
if (class_exists('WooCommerce')) {
    while (have_posts()) :
        the_post();
        // Output the page content if any
        the_content();

        // Output WooCommerce checkout form
        echo do_shortcode('[woocommerce_checkout]');
    endwhile;
} else {
    echo 'WooCommerce is not active.';
}

get_footer();
