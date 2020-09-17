<?php 
add_theme_support( 'post-thumbnails' ); 
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
function services() {
    register_post_type( 'services',
        array(
            'labels' => array(
                'name' => __( 'services' ),
                'singular_name' => __( 'Service' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'show_in_rest' => true,
            'supports' => array('title', 'excerpt', 'thumbnail', 'editor'),
 
        )
    );
}

add_action( 'init', 'services' );

function casestudies() {
    register_post_type( 'casestudies',
        array(
            'labels' => array(
                'name' => __( 'CaseStudies' ),
                'singular_name' => __( 'CaseStudy' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'casestudies'),
            'show_in_rest' => true,
            'supports' => array('title', 'excerpt', 'thumbnail', 'editor'),
 
        )
    );
}
add_action( 'init', 'casestudies' );