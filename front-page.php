<?php get_header(); ?>

  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <div class="container my-5">
      <h2>Welcome to <?php bloginfo( 'title' ); ?></h2>
    </div>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>