<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );


// Add "Add to Cart" buttons in Divi shop pages

add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 20 );

// END ENQUEUE PARENT ACTION


/* Custom Divi cart page */
function wphelp_divi_custom_cart()
{
ob_start();?>

<div class="empty-cart">
<span class="empty-cart-icon"><img src="https://sdobric.wppsbootcamp.com/projekat/wp-content/uploads/2022/09/e78f4ad4110b94e7520a2c75e8d2ba8d-1.jpg"> </span>
<h2>Oh, your basket is empty!</h2>
<p>We've got lots of lovely ideas to help you fill your basket</p>

</div>
<?php
$output = ob_get_clean();
ob_flush();
echo et_core_intentionally_unescaped($output, 'html');
}
remove_action( 'woocommerce_cart_is_empty', 'wc_empty_cart_message', 10 );
add_filter('woocommerce_cart_is_empty', 'wphelp_divi_custom_cart', 20 );