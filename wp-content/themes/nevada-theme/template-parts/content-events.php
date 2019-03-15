<div class="wrap__item">

  <div class="almanac__item">
    <div class="almanac__date">
      <p class="main-title-light">
        <?php echo get_the_date('M j Y') ?>
      </p>
    </div>

    <h2 class="second-title reset">
      <?php echo get_the_title(); ?>
    </h2>
    <p class="main-subtitle reset almanac__description">
      <?php echo get_the_excerpt(); ?>
    </p>



  </div>
  <div class="btn__wrap">
    <a href="#" class="btn__calendar"><i class="far fa-calendar"></i>calendar</a>
    <a href="events_details.html" class="btn_arrow">read more<i class="fas fa-chevron-right"></i></a>
  </div>

</div>
