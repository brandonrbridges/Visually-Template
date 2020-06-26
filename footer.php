  <div class="container-fluid bg-light">
    <div class="container">
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
  </div>

  <?php wp_footer(); ?>

</footer>
</html>