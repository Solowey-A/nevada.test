
<?php get_header(); ?>

<main id="main" class="page-main" role="main">
  <div class="page-container">
    <section class="almanac">
      <h2 class="main-title">events</h2>
      <div class="almanac__wrapper">
        <div class="almanac__doings">
  <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>



      <?php get_template_part( 'template-parts/content', 'events'); ?>

    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>

  <?php else : ?>

    <?php get_template_part( 'template-parts/content', 'none' ); ?>

  <?php endif; ?>

        </div>

        <aside class="calendar" id="calendar">
          <button class="btn_close"><i class="fas fa-times"></i></button>
          <?php if ( is_active_sidebar( 'sidebar-1' ) ){ ?>

            <?php dynamic_sidebar( 'sidebar-1' ); ?>

          <?php } ?>
        </aside>

      </div>

      <?php get_template_part( 'template-parts/contacts'); ?>

  </div>

</main>

<?php get_footer(); ?>
