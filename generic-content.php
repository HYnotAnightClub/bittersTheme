<?php

/*
	Template Name: contact page/ info page
*/

get_header();  ?>

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
			<div class="generic-content" style="background-image: url('<?php echo $thumb_url; ?>')">
				<div class="generic-postText">
		      <h2><?php the_title(); ?></h2> 
		      <?php the_content(); ?>
		      </div>
			</div>	
		<?php } else {?>
			<div class="generic-content" style="background-image: url('<?php bloginfo('template_url'); ?>/images/dark_wall.png')"> <!-- change default background image -->
				<div class="generic-postText">
			      <h2><?php the_title(); ?></h2> <!-- add your styling here -->
			      <?php the_content(); ?>
				</div>	
			</div>
		<?php } ?>
		
    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
  <div class="contact-form">
  	<?php  dynamic_sidebar( 'contact-form-section' ); ?> 
  </div>
	<!-- custom image -->
    <?php 
  	  $thumb_id = get_post_thumbnail_id();
  	  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
  	  $thumb_url = $thumb_url_array[0];
    ?>
    	<?php if ( has_post_thumbnail( $post_id ) ){ ?>
    		<div class="bottom-image" style="background-image: url('<?php echo $thumb_url; ?>')">
    		</div>	
    	<?php } else {?>
    		<div class="bottom-image" style="background-image: url('<?php bloginfo('template_url'); ?>/images/dark_wall.png')"> <!-- change default background image -->
    		</div>
    	<?php } ?>
    <!-- end custom image -->	
</div> <!-- /.main -->

<?php get_footer(); ?>