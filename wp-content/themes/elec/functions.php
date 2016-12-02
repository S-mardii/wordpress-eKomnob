
<?php
/**
 * @package WordPress
 * @subpackage elec_script
 * @since elec_script
 */
?>
<?php
	function elec_script(){
	   wp_enqueue_style( 'maincss', get_template_directory_uri() . '../css/main.css', array(), '3.0.3' );
		wp_enqueue_style( 'configcss', get_template_directory_uri() . '../css/config.css', array(), '3.0.3' );
		wp_enqueue_style( 'normalize', get_template_directory_uri() . '../css/normalize.css', array(), '3.0.3' );
		wp_enqueue_style( 'wp-default-style', get_stylesheet_uri() );       
        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0', true );	
      
	}
	add_action( 'wp_enqueue_scripts', 'elec_script' );
	function themes_setup(){
		add_theme_support('menus');
		register_nav_menu('main','Main Navidation');
		register_nav_menu('primary','Primary Header Navidation');
		register_nav_menu('secondary','Secondary Footer Navigation');
		
		add_theme_support('custom-background');
	    add_theme_support('custom-header');
	    add_theme_support( 'post-thumbnails' );
	    add_theme_support( 'automatic-feed-links' );
	    add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
		) );
		add_theme_support( 'custom-logo' );
        add_theme_support( 'post-formats', array(
			'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
		) );
	}
	add_action('init','themes_setup');
   function elec_wp_title( $title, $sep ) {
		global $paged, $page;
		if ( is_feed() ) {
			return $title;
		}
		$title .= get_bloginfo( 'name', 'display' );// Add the site name.
		$site_description = get_bloginfo( 'description', 'display' );// Add the site description for the home/front page.
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title = "$title $sep $site_description";
		}
		// Add a page number if necessary.
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
			$title = "$title $sep " . sprintf( __( 'Page %s', 'elec' ), max( $paged, $page ) );
		}
		return $title;
	}
	add_filter( 'wp_title', 'elec_wp_title', 10, 2 );
    function awesome_widget_setup(){
    	register_sidebar(
    		array(
    			'name'=>'Slidebar',
    			'id'=>'slidebar-1',
    			'description'=>'Standard Sidebar',
    			'before_widget'=>'<aside id="%1$s" class="widget %2$s">',
    			'after_widget'=>'</aside>',
    			'before_title'=>'<h1 class="widget-title">',
    			'after_title'=>'</h1>',
    			)
    		);
    }
    add_action('widgets_init','awesome_widget_setup');
	function wpdocs_my_search_form( $form ) {
	    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	    <div>
	    <input type="text" class="input-box" placeholder="Search Here" value="' . get_search_query() . '" name="s" id="s" />
	    <input type="submit"  class="submit-box" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
	    </div>
	    </form>';
	 
	    return $form;
	}
	add_filter( 'get_search_form', 'wpdocs_my_search_form' );
?>