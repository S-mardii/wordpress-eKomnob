 
<?php
/**
 * @package WordPress
 * @subpackage elec_script
 * @since elec_script
 */
?>
<div class="content-wrapper">

	<div class="content01">
        <div class="intro01">
        	<h1>HI, MY NAME IS JONATHON & I AM A DESIGNER DEVELOPER FATHER</h1>
            <p>With 10 years experience, I've occupied many roles including digital design director,
                web designer and developer. This site showcases some of my work. 
            </p>
            <div class="more"><a href="#">View More</a></div>
        </div>
       
    </div>
    <div class="content02">
    	 <div class="latestpro">
			<h1>Latest Product</h1>
			<p>Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere
				tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.
            </p>
        </div>
        <div class="product">
	      
				    <?php //query_posts('posts_per_page=5');?>
					<?php
	                   if(have_posts()):
	                   while (have_posts()):the_post();
                     ?>
	                <a href="<?php the_permalink();?>">

	                	<div class="box-pro">  

						    <div class="pro-img"><?php the_post_thumbnail('large');?></div>
							<a href="<?php the_permalink();?>">
								<div class="pro-title">
									<h1><?php the_title();?></h1>
				                    <h2>Price:<?php the_subtitle(); ?></h2>
				                    <h3>Samnang's Shop</h3>
								</div>
							</a>
							<div class="after">
								<div class="button">
									<div class="button01"><a href="#">Demo</a></div>
									<div class="button02"><a href="#">View</a></div>
							    </div>
							</div>
					    </div>

					</a>
	                <?php
		                endwhile;
		                endif;
	                 ?>	

	    </div>
	    <div class="more"><a href="#">View More</a></div>
				
    </div>  
   <div class="content03">
        <div class="bdContent02">
			<h1>Our Service</h1>
			<p>Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere
				tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.
            </p>
        </div>
        <div class="serviceBox">
           <div class="service-box1"><img src="<?php echo get_template_directory_uri(); ?>/image/b2/01.png" alt=" "></div>
            <div class="service-box1"><img src="<?php echo get_template_directory_uri(); ?>/image/b2/02.png" alt=" "></div>
             <div class="service-box1"><img src="<?php echo get_template_directory_uri(); ?>/image/b2/03.png" alt=" "></div>
            <div class="service-box1"><img src="<?php echo get_template_directory_uri(); ?>/image/b2/04.png" alt=" "></div>
        </div> 
    	
   
    
</div>