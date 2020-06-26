<?php

/**
 * Widgets
 * 
 * Path: /functions/widgets.php
 * 
 * USAGE: Add or remove all Widgets here
 */

function visually_widgets() {

  /* Footer One */
  register_sidebar( array(
      'name'          => 'Footer One',
      'id'            => 'footer-one',
      'before_widget' => '<div class="widget small">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="title">',
      'after_title'   => '</h5>',
  ) );

  /* Footer Two */
  register_sidebar( array(
      'name'          => 'Footer Two',
      'id'            => 'footer-two',
      'before_widget' => '<div class="widget small">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="title">',
      'after_title'   => '</h5>',
  ) );

  /* Footer Three */
  register_sidebar( array(
      'name'          => 'Footer Three',
      'id'            => 'footer-three',
      'before_widget' => '<div class="widget small">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="title">',
      'after_title'   => '</h5>',
  ) );

  /* Footer Four */
  register_sidebar( array(
      'name'          => 'Footer Four',
      'id'            => 'footer-four',
      'before_widget' => '<div class="widget small">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="title">',
      'after_title'   => '</h5>',
  ) );

  /* Footer Five */
  register_sidebar( array(
      'name'          => 'Footer Five',
      'id'            => 'footer-five',
      'before_widget' => '<div class="widget small">',
      'after_widget'  => '</div>',
      'before_title'  => '<h5 class="title">',
      'after_title'   => '</h5>',
  ) );

}
add_action( 'widgets_init', 'visually_widgets' );

?>
