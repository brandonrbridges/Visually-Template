<?php

/**
 * Enqueued Styles and Scrips
 * 
 * CSS:
 * - Bootstrap
 * - Theme Stylesheet
 * - Font Awesome
 * - AOS (Animated On Scroll)
 * - Slick
 * - Featherlight (Lightbox)
 * 
 * JS:
 * - jQuery
 * - Bootstrap
 * - Popper
 * - AOS (Animate On Scroll)
 * - Slick
 * - Featherlight (Lightbox)
 * 
 * USAGE: Remove the comments from the line
 */

function load_resources() {
  /**
   * Enqueued Styles
   */
  /* Bootstrap */
  wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );

  /* Theme Stylesheet */
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  /* Font Awesome */
  wp_enqueue_style( 'font-awesome', 'https://cdn.visually.digital/font-awesome/css/all.min.css' );

  /* AOS */
  // wp_enqueue_style( 'aos', get_stylesheet_directory_uri() . '/assets/css/aos.css' );

  /* Slick */
  // wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/assets/css/slick.min.css' );
  // wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/assets/css/slick-theme.min.css' );

  /* Featherlight */
  // wp_enqueue_style( 'featherlight', get_stylesheet_directory_uri() .  '/assets/css/featherlight.min.css' );

  /**
   * Enqueued Scripts
   */
  /* jQuery */
  wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.min.js', array(), null, true );

  /* Bootstrap */
  wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array(), null, true );

  /* Popper */
  wp_enqueue_script( 'popper', get_stylesheet_directory_uri() . '/assets/js/popper.min.js', array(), null, true );

  /* AOS */
  wp_enqueue_script( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true );

  /* Slick */
  // wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', null, true);

  /* Featherlight */
  // wp_enqueue_script( 'featherlight', 'https://cdnjs.cloudflare.com/ajax/libs/featherlight/1.7.13/featherlight.min.js', null, true ); 
}
add_action( 'wp_enqueue_scripts', 'load_resources' );

?>