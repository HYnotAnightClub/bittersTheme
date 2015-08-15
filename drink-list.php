<?php

/*
	Template Name: Drink or food list! (three columns)
*/

get_header();  ?>
<div class="main">

  <div class="container" >
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="menu-description" style="background-image: url('<?php bloginfo('template_url'); ?>/images/dark_wall.png')"> <!-- change default background image -->
			<div class="postText">
		      <h2><?php the_title(); ?></h2> <!-- add your styling here -->
		      <?php the_content(); ?>
			</div>	
		</div>
    <?php endwhile; // end the loop?>
      <!-- start of custom menu area -->
    	<div class="drink-list">
    		<div class="left-column">
    			<?php  dynamic_sidebar( 'menu-column1' ); ?> 
    		</div>
    		<div class="middle-column">
    			<?php  dynamic_sidebar( 'menu-column2' ); ?> 
    		</div>
    		<div class="right-column">
    			<?php  dynamic_sidebar( 'menu-column3' ); ?> 
    		</div>
    	</div>
    	<!-- end of custom menu area -->
  </div> <!-- /.container -->
  <!-- custom image -->
	  <?php 
		  $thumb_id = get_post_thumbnail_id();
		  $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
		  $thumb_url = $thumb_url_array[0];
	  ?>
	  	<?php if ( has_post_thumbnail( $post_id ) ){ ?>
	  		<div class="menu-bottom-image" style="background-image: url('<?php echo $thumb_url; ?>')">
	  		</div>	
	  	<?php } else {?>
	  		<div class="menu-bottom-image" style="background-image: url('<?php bloginfo('template_url'); ?>/images/dark_wall.png')"> <!-- change default background image -->
	  		</div>
	  	<?php } ?>
  	<!-- end custom image -->
</div> <!-- /.main -->

<?php get_footer(); ?>