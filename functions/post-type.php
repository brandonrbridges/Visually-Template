<?php
function create_posttype() {
  // register_post_type( 'services',
  //   array(
  //     'labels' => array(
  //       'name' => __( 'Services' ),
  //       'singular_name' => __( 'Service' )
  //     ),
  //     'public' => true,
  //     'has_archive' => true,
  //     'rewrite' => array('slug' => 'services'),
  //     'supports' => array( 'title', 'thumbnail', 'editor', 'author', 'excerpt' )
  //   )
  // );
}
add_action( 'init', 'create_posttype' );
?>