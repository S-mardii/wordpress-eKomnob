<?php get_header();?>
<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					get_template_part( 'content-index', get_post_format() );
				endwhile;
			?>	
<?php get_footer();?>
