
	<?php get_header();?>				
<div class="content-wrapper">		
		<div class="content-blog">
			<div class="current-action"></div>
			<div class="thumbnail-img"><?php the_post_thumbnail('thumbnail');?></div>
			
				 <div class="theTitle"><h1><?php the_title();?></h1></div>
			     <div class="theSubtitle"><h2><?php the_subtitle();?></h2></div>
				 <div class="theContent"><p><?php the_content();?></p></div>
	   
</div>
<?php get_footer();?>