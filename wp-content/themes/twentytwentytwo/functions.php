<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

function glyaxz_rrss( $content ){
	if(is_singular() && is_main_query()){
		$social_content = "</br> </br> </br> <a href='https://instagram.com/xkiki03'>Instagram</a> - <a href='https://www.twitter.com/glyaxz'>Twitter</a>";
		$content .= $social_content;
	}
	return $content;
}

add_filter('the_content', 'glyaxz_rrss');

/**
 * 
 * Generar un enlace para eliminar la informacion
 * @author Glyaxz <javiky03@gmail.com>
 * 
 */

function generate_delete_link( $content ){
	if(is_single() && in_the_loop()&& is_main_query()){
		$url = add_query_arg([
			'action' => 'front_delete',
			'post' => get_the_ID(),
			'nonce' => wp_create_nonce('front_delete'),
		], 
		home_url());
		return $content . '</br> </br>  <a href="' . esc_url($url) . '">' . esc_html__('Delete Post', '	') . '</a>';
	}
	return $content;
}

function post_delete(){
	if( isset($_GET['post'] ) && $_GET['action'] == 'front_delete' ){
		$post_id = (isset($_GET['post']) ? ($_GET['post']) : null);

		$post = get_post((int) $post_id);
		if(empty($post)){
			return;
		}
		wp_trash_post($post_id);

		$redirect = admin_url('edit.php');
		wp_safe_redirect($redirect);
		die;
	}
}

if(current_user_can('edit_others_posts')){
	add_filter( 'the_content', 'generate_delete_link' );
	add_action( 'init', 'post_delete' );
}

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
