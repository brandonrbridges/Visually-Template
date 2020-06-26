<?php

/**
 * Customisation
 *
 * USAGE: Just some fancy bits to customise the theme the backend a little more
 */

function visually_login_logo() {
  ?>
  <style type="text/css">
    body.login div#login h1 a {
    background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg');
    background-position: bottom;
    background-size: contain;
    /* padding-bottom: 30px; */
    width: 100%;
    }
  </style>
  <?php
}
add_action( 'login_enqueue_scripts', 'visually_login_logo' );

?>
