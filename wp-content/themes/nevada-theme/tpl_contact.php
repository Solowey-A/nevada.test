<?php
/*
 * Template Name: tpl_Contact
 */
?>

<?php get_header(); ?>

<main id="main" class="page-main" role="main">

<div class="contact__container">
  <div class="contact">
    <?php
    $contact_title = get_field('contact_title');
    if($contact_title){
      echo '<h2 class="main-title centered-text">' . $contact_title . '</h2>';
    };
    ?>


    <div class="contact__description">

      <?php
      $contact_subtitle = get_field('contact_subtitle');
      if($contact_title){
        echo '<p class="ex-subtitle main-subtitle centered-text">' . $contact_subtitle . '</p>';
      };
      ?>

    </div>
    <div class="contacts_wrap-width-padding">
      <?php get_template_part( 'template-parts/contacts'); ?>
    </div>
    <div class="contacts_wrap">
      <div class="contact__map">
        <div id="map">
        <?php echo do_shortcode('[google_map_easy id="1"]')?>
        </div>


        <div class="contact__hours">

          <?php
          if( have_rows('working_hours') ):

          while ( have_rows('working_hours') ) : the_row();?>
          <h2 class="second-title centered-text reset"><?php the_sub_field('title');?></h2>
          <div class="day_hours">
            <p class="date reset"><?php the_sub_field('date');?></p>
            <p class="hours reset"><?php the_sub_field('hours');?></p>


          </div>
          <?php endwhile;

          else :

          endif;

          ?>
          </div>



      </div>

      <div class="contact__form"
        <?php
        $banner = get_field('form_banner');

        if ($banner) : ?>
          style="background-image: url('<?php echo $banner; ?>')"
        <?php endif;

        ?>
      >
        <div class="contact__form_inner">

          <?php echo do_shortcode( '[contact-form-7 id="241" title="Contact page form"]' ); ?>

        </div>
      </div>
    </div>
  </div>
</div>

</main>

<?php get_footer(); ?>
