<?php
/*
 * Template Name: tpl_Wine
 */
?>

<?php get_header(); ?>

  <main id="main" class="page-main" role="main">

    <div class="page-container">

    <div class="product">
      <?php
      $wine_title = get_field('page_title');
      if($wine_title){
        echo '<h2 class="title">' . $wine_title . '</h2>';
      };
      ?>
      <div class="product__container">

            <?php

            if( have_rows('wine_products') ):

              while ( have_rows('wine_products') ) : the_row();?>

        <div class="product__item">
          <div class="product__image">

                  <img src="<?php the_sub_field("bottle_image");?>" alt="<?php the_sub_field("image_alt");?>">

            <div class="product__capacity">
                                <img src="<?php the_sub_field("capacity_image");?>" alt="<?php the_sub_field("image_alt");?>">
                  <span class="liter"><?php the_sub_field("bottle_liter");?></span>
            </div>

          </div>

          <div class="product__description">

            <?php the_sub_field("wine_description");?>

            <?php

            if( have_rows('wine_specification') ):

            while ( have_rows('wine_specification') ) : the_row();?>
                <p class="main-subtitle reset"><span class="attribute"><?php the_sub_field('attribute');?> </span><?php the_sub_field('description');?> </p>

            <?php endwhile;

            else :

            endif;

            ?>

          </div>
        </div>

              <?php endwhile;

            else :
            endif;
            ?>

      </div>

    </div>
      <?php get_template_part( 'template-parts/contacts'); ?>
    </div>
  </main>

<?php get_footer(); ?>
