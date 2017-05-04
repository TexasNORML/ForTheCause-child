<?php

function ftc_enqueue_styles() {

    $parent_style = 'forthecause-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    // wp_enqueue_style( 'child-style',
    //     get_stylesheet_directory_uri() . '/style.css',
    //     array( $parent_style ),
    //     false,
    //     wp_get_theme()->get('Version'),
    //     'all'
    // );

    wp_enqueue_style( 'custom-style',
        get_stylesheet_directory_uri() . '/css/custom.css',
        false,
        wp_get_theme()->get('Version'),
        'all'
    );
    
   
}
add_action( 'wp_enqueue_scripts', 'ftc_enqueue_styles' );


?>