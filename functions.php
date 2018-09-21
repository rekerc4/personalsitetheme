<?php


add_action( 'wp_default_scripts', 'move_jquery_into_footer' );

function move_jquery_into_footer( $wp_scripts ) {

    if( is_admin() ) {
        return;
    }

    $wp_scripts->add_data( 'jquery', 'group', 1 );
    $wp_scripts->add_data( 'jquery-core', 'group', 1 );
    $wp_scripts->add_data( 'jquery-migrate', 'group', 1 );
}


function load_scripts()  {


  wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');


}

function load_jquery() {

  wp_enqueue_script('jquery', true);

 }

add_action( 'wp_enqueue_scripts', 'load_scripts');
add_action('wp_enqueue_scripts', 'load_jquery');
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
    wp_deregister_style( 'contact-form-7' );
}



