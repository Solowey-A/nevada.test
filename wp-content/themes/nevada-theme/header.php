<!DOCTYPE html>
<html id="html--hidden" <?php language_attributes(); ?>>
<head>
	<?php get_template_part( 'template-parts/head' ); ?>
</head>

<body <?php body_class("page-body"); ?>>


<header class="page-header">

    <button id="toggle" class="menu__hamburger ">

      <span class="span1 line"></span>
      <span class="span2 line"></span>
      <span class="span3 line"></span>

    </button>

		<nav class="main-nav" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_class' => 'main-nav__list', 'container' => false ) ); ?>
		</nav>

	</header>

    <div class="wrapper <?php echo is_front_page() ? 'wrapper--home' : null ?>"
      <?php

      if( is_404()) {
        $error_banner = get_field('banner', 'option');
        if ($error_banner) : ?>
          style="background-image: url('<?php echo $error_banner; ?>')"
          <?php endif;
      }

      ?>
      <?php

      if( is_singular('events')) {
        $events_banner = get_field('events_banner');
        if ($events_banner) : ?>
          style="background-image: url('<?php echo $events_banner; ?>')"
        <?php endif;
      }

      ?>

      <?php

      if( is_archive('events')) {
        $events_banner = get_field('events_banner');
        if ($events_banner) : ?>
          style="background-image: url('<?php echo $events_banner; ?>')"
        <?php endif;
      }
      ?>

      <?php
      $banner = get_field('home_banner');

      if ($banner) : ?>
        style="background-image: url('<?php echo $banner; ?>')"
      <?php endif;

      ?>>

        <div class="overlay"></div>
        <?php

        $header_logo = get_field('header_logo', 'option');
        if ($header_logo) : ?>

          <a href="<?php echo get_home_url( null, '/', 'http' ); ?>" class="wrapper__logo"><img class="logo-item" src="<?php echo $header_logo ?>"></a>

        <?php endif; ?>

</div>

    <?php

    if( is_404()) {
      $error_logo = get_field('error_logo', 'option');
      if ($error_logo) : ?>

        <a href="<?php echo get_home_url( null, '/', 'http' ); ?> " class="link-error"><img src="<?php echo $error_logo ?>"></a>
      <?php endif;
    }

    ?>
