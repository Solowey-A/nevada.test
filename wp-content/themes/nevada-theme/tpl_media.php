<?php
/*
 * Template Name: tpl_Media
 */
?>

<?php get_header(); ?>

<main id="main" class="page-main" role="main">
  <div class="page-s-container">
    <section class="publications">
      <?php
      $media_title = get_field('media_title');
      if($media_title){
        echo '<h2 class="title centered-text">' . $media_title . '</h2>';
      };
      ?>
      <div class="publication" id="container">

        <?php

        if( have_rows('media_post') ):

          while ( have_rows('media_post') ) : the_row();?>

            <article class="item publication__post">
              <div class="publication__post-wrap">
                <p class="date reset">
                  <?php the_sub_field("date");?>
                </p>
                <h2 class="main-title ex-subtitle-media">
                  <?php the_sub_field("title");?>

                </h2>

                <?php

                $image = get_sub_field('image');

                if( !empty($image) ): ?>
                  <div class="publication__image">
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              </div>
                <?php endif; ?>

                <p class="main-subtitle ex-subtitle">
                  <?php the_sub_field("subtitle");?>
                </p>

                <?php

                if( have_rows('button') ):

                while ( have_rows('button') ) : the_row();?>

                <a class="btn_arrow"><?php the_sub_field('inner_text');?><i class="<?php the_sub_field('button_icon');?>"></i></a>
                <?php endwhile;

                else :

                endif;

                ?>
              </div>
            </article>

          <?php endwhile;

        else :

        endif;

        ?>

      </div>

</section>
    <?php get_template_part( 'template-parts/contacts'); ?>
  </div>
</main>

<?php get_footer(); ?>
