<?php
/**
 * Arquivo de funções PHP do WordPress.
 */
add_action( 'send_headers', 'send_frame_options_header', 10, 0 );

/* Suporte do tema para Woocommerce */
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

/* Remoção dos links da página de produto */
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

/* Suporte do tema para imagem destacadas */
add_theme_support( 'post-thumbnails' );

/* Suporte do tema para menu */
function register_my_menu() {
  register_nav_menu('new-menu',__( 'Menu' ));
}
add_action( 'init', 'register_my_menu' );

/* Implementação de classes no menu */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active menu-active';
    }
    return $classes;
}

function myfeed_request( $qv ) {
    if ( isset( $qv['feed'] ) && !isset( $qv['post_type'] ) ) {
    $qv['post_type'] = array( 'enquetes' );
    }
    return $qv;
}
add_filter( 'request', 'myfeed_request' );

?>