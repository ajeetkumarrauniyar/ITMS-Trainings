<?php

/**
 * Checkout Form
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if (!defined('ABSPATH')) {
    exit;
}

do_action('woocommerce_before_checkout_form', $checkout);

// If checkout registration is disabled and not logged in, the user cannot checkout.
if (!$checkout->is_registration_enabled() && $checkout->is_registration_required() && !is_user_logged_in()) {
    echo esc_html(apply_filters('woocommerce_checkout_must_be_logged_in_message', __('You must be logged in to checkout.', 'woocommerce')));
    return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">

    <main class="checkout">
        <div>
            <button id="backto-button">
                <span>
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/checkout/back_icon.svg" alt="" />
                    <?php esc_html_e('Back to Previous', 'tutorstarter'); ?>
                </span>
            </button>
            <h1><?php esc_html_e('Checkout', 'woocommerce'); ?></h1>
        </div>

        <div id="billing-and-summary-container">
            <div id="billing-container">
                <?php if ($checkout->get_checkout_fields()) : ?>
                    <?php do_action('woocommerce_checkout_before_customer_details'); ?>
                    <div id="customer_details">
                        <?php do_action('woocommerce_checkout_billing'); ?>
                    </div>
                    <?php do_action('woocommerce_checkout_after_customer_details'); ?>
                <?php endif; ?>
            </div>

            <div id="summary-container">
                <h2><?php esc_html_e('Summary', 'tutorstarter'); ?></h2>
                <?php do_action('woocommerce_checkout_before_order_review_heading'); ?>
              
                <?php do_action('woocommerce_checkout_before_order_review'); ?>
                
                <div id="order_review" class="woocommerce-checkout-review-order">
                    <?php do_action('woocommerce_checkout_order_review'); ?>
                </div>
                <?php do_action('woocommerce_checkout_after_order_review'); ?>
      
            </div>
        </div>
    </main>

</form>

<script>
    document.getElementById('backto-button').addEventListener('click', function(e) {
        e.preventDefault();
        window.history.back();
    });
</script>

<?php do_action('woocommerce_after_checkout_form', $checkout); ?>