<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php wp_head(); ?>
</head>
<body>

  <?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  ?>

  <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
    <div class="container">
      <?php if( has_custom_logo() ) : ?>
        <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">
          <img src="<?php echo esc_url( $logo[0] ); ?>" alt="<?php bloginfo( 'name' ); ?> Logo" width="250" />
        </a>
      <?php else : ?>
        <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
      <?php endif; ?>

      <?php
      wp_nav_menu( array(
          'theme_location'    => 'primary',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'bs-example-navbar-collapse-1',
          'menu_class'        => 'nav navbar-nav',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker(),
      ) );
      ?>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
