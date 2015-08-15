<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">
	
    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    		<?php get_footer(); ?>
    </div> <!--/.content -->
	
<!--     <?php get_sidebar(); ?> -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

