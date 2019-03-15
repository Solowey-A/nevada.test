<?php
/*
 * Template Name: tpl_Home
 */
?>

<?php get_header(); ?>


  <main id="main" class="page-main" role="main">

    <div class="page-container">
    <section class="story">
      <?php
      $story_title = get_field('story_title');
        if($story_title){
          echo '<h2 class="title">' . $story_title . '</h2>';
        };

      ?>

      <?php

      $story_subtitle = get_field('story_subtitle');

      if($story_subtitle){
        echo '<p class="ex-subtitle main-subtitle centered-text">' . $story_subtitle . '</p>';
      }

      ?>

    </section>


    <div class="instaphoto">

        <?php

        if( have_rows('instaphoto') ):

          while ( have_rows('instaphoto') ) : the_row();?>

            <div class="instaphoto__wrap">
              <img src="<?php the_sub_field("image");?>" alt="<?php the_sub_field("image_alt");?>">
            </div>

          <?php endwhile;

        else :

          endif;

        ?>

    </div>
      <div class="subscribe">
        <?php echo do_shortcode( '[contact-form-7 id="87" title="Contact form 1"]' ); ?>
      </div>

      <div class="meet"

        <?php
        $meet_banner = get_field('meet_banner');

        if ($meet_banner) : ?>
          style="background-image: url('<?php echo $meet_banner; ?>')"
        <?php endif;

        ?>>
        <div class="meet__wrap">
          <div class="meet__inner">
            <?php
            $meet_title = get_field('meet_title');
            if($story_title){
              echo '<h2 class="main-title">' . $meet_title . '</h2>';
            };

            ?>

            <?php

            $meet_subtitle = get_field('meet_subtitle');

            if($meet_subtitle){
              echo '<p class="second-subtitle">' . $meet_subtitle . '</p>';
            }

            ?>
          </div>
        </div>
      </div>



      <?php get_template_part( 'template-parts/contacts'); ?>

</div>
  </main>

<?php get_footer(); ?>
