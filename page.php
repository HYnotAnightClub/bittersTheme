<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php  
          $thumb_id = get_post_thumbnail_id();
          $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
          $thumb_url = $thumb_url_array[0];
      ?>
       <div class="mainPost" style="background-image: url('<?php echo $thumb_url; ?>')">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        </div>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>