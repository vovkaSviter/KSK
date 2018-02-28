<?php
    function theme_enqueue_styles() {
        wp_enqueue_style( 'grid12', get_stylesheet_directory_uri() . '/assets/css/grid12.css' );
    }
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

    function theme_enqueue_js() {
        wp_enqueue_script( 'JQ', get_stylesheet_directory_uri() . '/assets/js/jquery-3.3.1.min.js' );
    }
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_js' );