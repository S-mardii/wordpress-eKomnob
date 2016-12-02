
<?php
/**
 * @package WordPress
 * @subpackage elec_script
 * @since elec_script
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
    <script type="text/javascript">
      $(document).ready(function(){
      	$(".search-icon").click(function(){
      		$("search-form").toggle();
      	});

      });
    </script>
  
    <style>
    ul.top-menu li a:hover{
    	color: white;
    }
    
    </style>
</head>
<body <?php body_class(); ?>>
	<div class="wrapper">
		<div class="header-wrapper">
			<div class="header">
				<div class="headerLeft">
		        	<img src="<?php echo get_template_directory_uri(); ?>/image/b2/logo.png" alt=" ">
				</div>
				<div class="headerRight">
						<!-- <?php get_search_form();?> -->
						  <!-- <ul class="top-menu"><?php wp_nav_menu(array('theme_location'=>'main'));?> </ul>          --> 
						<ul class="top-menu">
				      	<li class="active"><a href="http://localhost:8080/wordpress/" style="color:#fff;">home</a></li>
				      	<li><a href="http://localhost:8080/wordpress/index.php/electricity-equipment/">electricity</a></li>
				      	<li><a href="http://localhost:8080/wordpress/index.php/technology/">technology</a></li>
				      	<li><a href="http://localhost:8080/wordpress/index.php/about-us/">about us</a></li>
				      	<li><a href="http://localhost:8080/wordpress/index.php/contact-us/">contact us</a></li>
				      </ul>
				</div> 
					   		    		    	
				     
				      
			    
			</div>
			
	   </div>


