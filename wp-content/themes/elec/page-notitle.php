
<?php
/**
 * @package WordPress
 * @subpackage elec_script
 * @since elec_script
 */
?>
<?php 
/* Template Name: Page No Title*/
get_header(); ?>


<?php
	if(have_posts());
	   while (have_posts()):the_post();
?>
	
	      <h2> <?php the_category();?></h2>
	       <h3><?php the_content();?></h3>
	  <?php  endwhile; ?>
	<!-- endif;

    ?> -->
<?php get_footer(); ?>