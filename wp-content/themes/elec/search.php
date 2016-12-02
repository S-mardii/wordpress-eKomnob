
				
				 <?php //query_posts('posts_per_page=5');?>
					 <?php
	                   if(have_posts()):
	                   while (have_posts()):the_post();

                     ?>
	                  <?php get_template_part('content','search');?>
				

	                <?php
		                endwhile;
		                endif;
	                 ?>