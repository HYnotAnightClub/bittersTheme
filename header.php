<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>

<!-- Start of Body Styles -->

<body <?php body_class(); ?>>
  <div class="container">
    <nav class="main-nav-bar"> <!-- Start of navigation bar -->
      <div class="nav-logo"> <!-- Start of customizable logo (top left corner) -->
          <?php if ( get_theme_mod( 'bitters_logo' ) ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">             
              <img src="<?php echo get_theme_mod( 'bitters_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            </a>
            <?php else : ?> <!-- NEED TO FIGURE OUT HOW TO HIDE TEXT IF IMAGE ISNT PRESENT -->
            <h1>
              <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
                <?php bloginfo( 'name' ); ?>
              </a>
            </h1>
          <?php endif; ?> 
      </div> <!-- End of customizable logo -->
      <div class="navigation"> <!-- Start of customizable navigation -->
        <?php  wp_nav_menu(array(
          'container' => 'nav', 
          'container_id' => 'nav',
          'theme_location' => 'primary'
        ));?>
      </div> <!-- End of customizable navigation -->
    </nav> <!-- End of navigation bar -->
<header class="hero">
</div>
    <!-- THIS IS THE CUSTOM IMAGE -->
    <div class="customBackground" style="background-image: url(<?php header_image(); ?>)">
      <!-- <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /> -->
    </div>
    <!-- THIS IS THE CUSTOM IMAGE GOING AWAY -->

  </div> <!-- End of container -->
</header> <!-- End of header -->

