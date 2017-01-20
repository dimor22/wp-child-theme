<?php
function e_com_scripts() {

    $parent_style = 'twentyseventeen'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_script( 'bootstrap', get_theme_file_uri() . '/inc/bower_components/jquery/dist/jquery.min.js', array(), wp_get_theme()->get('Version') );
    wp_enqueue_script( 'bootstrap', get_theme_file_uri() . '/inc/bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js', array(), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'e_com_scripts' );
?>
