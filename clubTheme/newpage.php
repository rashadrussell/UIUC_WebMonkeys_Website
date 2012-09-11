<?php

    /* Template Name: New Page */

?>

<?php get_header(); ?>

<div id="content_wrapper"><!-- content_wrapper -->
    <div id="content_container"><!-- content_container -->
    	
	<!-- Start Wordpress Loop -->
	 <?php if (have_posts()) : while (have_posts()) : the_post();?>
	
	<!-- Get Wordpress Content -->
	<h4 class="title"><?php the_title(); ?></h5>
	<?php the_content(); ?>
	
	<!-- End Wordpress Loop -->
	<?php endwhile; endif; ?>
	    
    </div><!-- end content_container -->
</div><!-- end content_wrapper -->
<?php get_footer(); ?>
