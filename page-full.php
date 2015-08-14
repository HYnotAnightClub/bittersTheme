<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>
  <!-- THIS IS THE CUSTOM IMAGE -->
<div class="custom-hero-image" style="background-image: url('<?php header_image(); ?>')">
      <!-- <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /> -->
</div>
<div class="blank"></div>
    <!-- THIS IS THE CUSTOM IMAGE GOING AWAY -->
    <?php  dynamic_sidebar( 'menu-widget-area' ); ?> <!-- custom menu goes here? -->
<div class="main">

  <div class="container" >

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    	<?php  
    	$thumb_id = get_post_thumbnail_id();
    	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
    	$thumb_url = $thumb_url_array[0];
    	?>
		
		<?php if ( has_post_thumbnail( $post_id ) ){ ?>
			<div class="mainPost" style="background-image: url('<?php echo $thumb_url; ?>')">
		      <h2><?php the_title(); ?></h2> 
		      <?php the_content(); ?>
			</div>	
		<?php } else {?>
			<div class="mainPost" style="background-image: url('<?php bloginfo('template_url'); ?>/images/dark_wall.png')"> <!-- change default background image -->
			      <h2><?php the_title(); ?></h2> <!-- add your styling here -->
			      <?php the_content(); ?>
			</div>	
		<?php } ?>
		
	<?php echo do_shortcode('[instagram-feed num=4]');  ?> 

		    
		
    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
  <div class="blank"></div>
  <?php  dynamic_sidebar( 'body-widget-area' ); ?> <!-- instagram goes here -->

</div> <!-- /.main -->

<?php get_footer(); ?>