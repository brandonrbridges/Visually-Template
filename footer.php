<div class="container-fluid bg-light footer py-5">
    <div class="container mb-5">
      <div class="row">
        <?php if ( is_active_sidebar( 'footer-one' ) ) : ?>
          <div class="col-md">
            <?php dynamic_sidebar( 'footer-one' ); ?>
          </div>
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'footer-two' ) ) : ?>
          <div class="col-md mt-5 mt-md-0">
            <?php dynamic_sidebar( 'footer-two' ); ?>
          </div>
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'footer-three' ) ) : ?>
          <div class="col-md mt-5 mt-md-0">
            <?php dynamic_sidebar( 'footer-three' ); ?>
          </div>
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'footer-four' ) ) : ?>
          <div class="col-md mt-5 mt-md-0">
            <?php dynamic_sidebar( 'footer-four' ); ?>
          </div>
        <?php endif; ?>

        <?php if ( is_active_sidebar( 'footer-five' ) ) : ?>
          <div class="col-md mt-5 mt-md-0">
            <?php dynamic_sidebar( 'footer-five' ); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="container border-top pt-5">
      <div class="row">
        <div class="col-md d-none d-md-block">

        </div>
        <div class="col-md text-center text-md-right">
          <p class="meta">&copy; <?php bloginfo( 'title' ); ?> <?php echo date('Y'); ?></p>
        </div>
      </div>
    </div>
  </div>

  <?php wp_footer(); ?>

</footer>
</html>
