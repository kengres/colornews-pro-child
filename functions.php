<?php
    define( 'COLORCHILD_URL', get_stylesheet_directory() );

    define( 'POST_TYPE_URL', COLORCHILD_URL . '/post_types' );
    define( 'HOOKS_URL', COLORCHILD_URL . '/inc' );
    // define( 'CSS_URL', COLORCHILD_CHILD_URL . '/css' );
    // define( 'CUSTOMIZE_URL', COLORCHILD_CHILD_URL . '/inc/customize' );

    // enqueue styles for child theme

	function color_child_enqueue_styles() {
		
		// enqueue parent styles
		wp_enqueue_style('colornews', get_template_directory_uri() .'/style.css');

		// enqueue child styles
		$ft = filemtime( get_stylesheet_directory() . '/style.css');
		// $ft = 1.0;
		wp_enqueue_style('color_child', get_stylesheet_directory_uri() .'/style.css', array('colornews'), $ft, 'all');

		//enqueue child custom js
		wp_enqueue_script( 'color_child', get_stylesheet_directory_uri(). '/js/myScripts.js', array('jquery'), 0.4);

		//enqueue map custom js
		//wp_enqueue_script( 'kdjaro_google_map', get_stylesheet_directory_uri(). '/js/googleMap.js', array(), 0.1);
		
		
	}
	add_action('wp_enqueue_scripts', 'color_child_enqueue_styles');

	// adding post type

	require_once (POST_TYPE_URL.'/programme_posts.php');
	require_once (POST_TYPE_URL.'/action_posts.php');
	require_once (POST_TYPE_URL.'/publications_posts.php');
	require_once (POST_TYPE_URL.'/a_propos_posts.php');
	require_once (POST_TYPE_URL.'/partenaires_posts.php');
	require_once (POST_TYPE_URL.'/contact_form.php');

	// custom functins
	require_once (HOOKS_URL. '/functions.php');

	/**
 * function to show the footer info, copyright information
 */
if ( ! function_exists( 'color_child_footer_copyright' ) ) :
	function color_child_footer_copyright() {
		$site_link = '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" ><span>' . get_bloginfo( 'name', 'display' ) . '</span></a>';
	
		$default_footer_value = sprintf( __( 'Copyright &copy; %1$s %2$s.', 'color_child' ), date( 'Y' ), $site_link );
	
		$color_child_footer_copyright = '<div class="copy-right">'.$default_footer_value.'</div>';
		echo $color_child_footer_copyright;
	}
	endif;
	
	add_action( 'color_child_footer_copyright', 'color_child_footer_copyright', 10 );