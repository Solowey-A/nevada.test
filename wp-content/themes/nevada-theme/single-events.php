<?php get_header(); ?>

<main id="main" class="site-main" role="main">

  <?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'single-events'); ?>

    <?php // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif; ?>

  <?php endwhile; ?>
  <div class="page-container">
  <?php get_template_part( 'template-parts/contacts'); ?>
  </div>
</main>

<?php get_footer(); ?>
