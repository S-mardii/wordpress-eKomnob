<?php if(is_category()){ single_cat_title();}?>
<?php echo category_description($category);?>
<?php while(have_post()):the_post();?>
	<a href="<?php the_permalink();?>"><?php the_title();?></a>
<?php endwhile;?>