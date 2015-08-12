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


<body <?php body_class(); ?>>

<header>
  <div class="container">
    <?php if ( get_theme_mod( 'bitters_logo' ) ) : ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
       
              <img src="<?php echo get_theme_mod( 'bitters_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
              <h1>
                <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
                  <?php bloginfo( 'name' ); ?>
                </a>
              </h1>
      </a>
      <?php else : ?>
      <h1>
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      </h1>
    <?php endif; ?>  

    <!-- THIS IS THE CUSTOM IMAGE -->
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    <!-- THIS IS THE CUSTOM IMAGE GOING AWAY -->
    <?php  wp_nav_menu(array(
      'container' => 'nav', 
      'container_id' => 'nav',
      'theme_location' => 'primary'
    ));?>
  </div> <!-- /.container -->
</header><!--/.header-->

