<?php

/**
 * Customisation
 * 
 * USAGE: Just some fancy bits to customise the theme the backend a little more
 */

function login_logo() {
  ?>
  <style type="text/css">
    body.login div#login h1 a {
    background-image: url(<?php get_stylesheet_directory_uri(); ?>/assets/images/logo.svg);
    padding-bottom: 30px;
    }
  </style>
  <?php
}

?>