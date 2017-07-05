<?php
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

function add_meta_tags() {
    echo '<meta property="og:title" content="Mini Maker - Kits de brinquedos mão na massa" />';
    echo '<meta property="og:description" content="Novas formas de aprender com base nos conceitos do movimento maker. Kits para construção de brinquedos educativos criativos" />';
    echo '<meta name="keywords" content="Movimento Maker, Educativos, Educação, aprendizagem, crianças, brincadeiras, brinquedos, criatividade" />';
    echo '<meta property="og:type" content="website" />';
    echo '<meta property="og:site_name" content="Mini Maker" />';
    echo '<meta property="og:image" content="../../uploads/2017/07/logo-vermelho.png" />';
}
add_action('wp_head', 'add_meta_tags');

?>