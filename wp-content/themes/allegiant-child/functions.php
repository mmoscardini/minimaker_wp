<?php
/*Criar tema filho*/
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles',99);

function child_enqueue_styles() {
    $parent_style = 'allegiant-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'allegiant-child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version') );
}
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
         update_option( 'theme_mods_' . get_template(), $value );
         return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

/* Acicionar meta tags a pagina*/
function add_meta_tags() {
    echo '<meta property="og:title" content="Mini Maker - Kits de brinquedos mão na massa" />';
    echo '<meta property="og:description" content="Novas formas de aprender com base nos conceitos do movimento maker. Kits para construção de brinquedos educativos criativos" />';
    echo '<meta name="keywords" content="Movimento Maker, Educativos, Educação, aprendizagem, crianças, brincadeiras, brinquedos, criatividade" />';
    echo '<meta property="og:type" content="website" />';
    echo '<meta property="og:site_name" content="Mini Maker" />';
    echo '<meta property="og:image" content="../../uploads/2017/07/logo-vermelho.png" />';
}
add_action('wp_head', 'add_meta_tags');

/*Add Cart icon and count to header if WC is active*/
function my_wc_cart_count() {
 
    if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

        $count = WC()->cart->cart_contents_count;
        ?>
        <a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Visualizar carrinho' ); ?>">
        <?php

        if ( $count >= 0 ) {
            ?>
            <span class="cart-contents-count">
                <span class="glyphicon glyphicon-shopping-cart"></span>
                <?php echo esc_html( $count ); ?></span>
            <?php
        }
                ?></a><?php
    }

 
}
add_action( 'cpotheme_header', 'my_wc_cart_count' );

//Atualizar carrinho automaticamente
function my_header_add_to_cart_fragment( $fragments ) {
     ob_start();

    $count = WC()->cart->cart_contents_count;
    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Visualizar carrinho' ); ?>"><?php
    if ( $count >= 0 ) {
        ?>
        <span class="glyphicon glyphicon-shopping-cart"></span>
        <span class="cart-contents-count"><?php echo esc_html( $count ); 
        ?></span>
        <?php            
    }
        ?></a><?php
 
    $fragments['a.cart-contents'] = ob_get_clean();
     
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );

?>