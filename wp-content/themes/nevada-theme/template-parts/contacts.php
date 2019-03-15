<div class="contacts">


  <div class="contacts__inner">
    <div class="contacts__item">

      <?php

      if( have_rows('left_bar', "option") ):

        while ( have_rows('left_bar', "option") ) : the_row();?>

      <h2 class="second-title reset"><?php the_sub_field("title", "option");?></h2>
          <p class="third-subtitle reset centered-text"><?php the_sub_field("subtitle", "option");?></p>

        <?php endwhile;

      else :

      endif;

      ?>

    </div>
    <div class="contacts__item--contact">
      <?php

      if( have_rows('center_bar', "option") ):

        while ( have_rows('center_bar', "option") ) : the_row();?>

          <h2 class="second-title reset"><?php the_sub_field("title", "option");?></h2>

          <a class="third-subtitle reset centered-text"
             href="<?php the_sub_field("mailto", "option");?>">
            <?php the_sub_field("link_inner_text", "option");?>
          </a>

        <?php endwhile;

      else :

      endif;

      ?>

      
    </div>

    <div class="contacts__item">
      <?php

      if( have_rows('right_bar', "option") ):

        while ( have_rows('right_bar', "option") ) : the_row();?>

          <h2 class="second-title reset"><?php the_sub_field("title", "option");?></h2>


        <?php endwhile;

      else :

      endif;

      ?>


      <div class="social centered-text">

        <?php

        if( have_rows('right_bar', "option") ):

          while ( have_rows('right_bar', "option") ) : the_row();?>

            <?php

            if( have_rows('social_link', "option") ):

              while ( have_rows('social_link', "option") ) : the_row();?>

                <a class="social__item" href="<?php the_sub_field("link", "option");?>">
                  <i class="<?php the_sub_field("social_icon", "option");?>">

                  </i>
                </a>

              <?php endwhile;

            else :

            endif;

            ?>


          <?php endwhile;

        else :

        endif;

        ?>


      </div>
    </div>

  </div>
</div>
