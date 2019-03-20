<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="page-container">
    <section class="details">
      <h2 class="second-title reset">
        <?php echo get_the_title(); ?>
      </h2>
      <div class="details__wrapper">
        <div class="details__area">
          <div class="details__item">
            <div class="details__date">
              <p class="main-title-light">
                <?php echo get_the_date('M j Y') ?>
              </p>
            </div>

            <div class="event__subtitle reset">
              <?php the_content(); ?>
            </div>


          </div>
          <div class="btn__wrap">

            <a href="http://nevada.test/events/" class="btn__back"><i class="fas fa-chevron-left"></i>to events</a>
            <a href="#" class="btn__calendar"><i class="far fa-calendar"></i>calendar</a>
          </div>
        </div>

        <aside class="calendar" id="calendar">
          <button class="btn_close"><i class="fas fa-times"></i></button>


          <?php if ( is_active_sidebar( 'sidebar-1' ) ){ ?>

            <?php dynamic_sidebar( 'sidebar-1' ); ?>

          <?php } ?>
        </aside>

      </div>




    </section>



  </div>

