<?php

function load_resources() {
  // Enqueue Styles
  wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'font-awesome', 'https://cdn.visually.digital/font-awesome/css/all.min.css' );
  wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
  wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );
  wp_enqueue_style( 'slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css' );
  wp_enqueue_style( 'featherlight', 'https://cdnjs.cloudflare.com/ajax/libs/featherlight/1.7.13/featherlight.min.css' );

  // Enqueue Scripts
  wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', array(), null, true );
  wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array(), null, true );
  wp_enqueue_script( 'popper', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array(), null, true );
  wp_enqueue_script( 'aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true );
  wp_enqueue_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', null, true);
  wp_enqueue_script( 'featherlight-js', 'https://cdnjs.cloudflare.com/ajax/libs/featherlight/1.7.13/featherlight.min.js', null, true ); 
}
add_action( 'wp_enqueue_scripts', 'load_resources' );

?>