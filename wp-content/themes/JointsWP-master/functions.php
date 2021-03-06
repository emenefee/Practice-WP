<?php
/** 
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */			
	
// Theme support options
require_once(get_template_directory().'/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php'); 

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php'); 

// Remove Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/admin.php'); 

//Add custom navigation to wp theme
function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

//Creating an options page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

// Creating (new) block types
add_action('acf/init', 'my_acf_init');
function my_acf_init() {
	
	// Check function exists
	if( function_exists('acf_register_block') ) {
		
		// Register a support
		acf_register_block_type(array(
			'name'				=> 'support-us',
			'title'				=> __('Support Us'),
			'description'		=> __('A custom suport block.'),
			'render_template'	=> 'parts/blocks/support-us.php',
			// 'category'			=> 'formatting',
			'icon'				=> 'universal-access',
			'keywords'			=> array( 'support', 'us' ),
		));

		// // EDIT TO BE A STATEMENT
		// acf_register_block(array(
		// 	'name'				=> 'covid19',
		// 	'title'				=> __('Covid-19'),
		// 	'description'		=> __('A custom safety infomaion block.'),
		// 	'render_callback'	=> 'my_acf_block_render_callback',
		// 	// 'category'			=> 'formatting',
		// 	'icon'				=> 'warning',
		// 	'keywords'			=> array( 'safe', 'safety', 'information', 'covid19', 'covid-19', ),
		// ));

		// Register a products
		acf_register_block_type(array(
			'name'				=> 'product',
			'title'				=> __('Products'),
			'description'		=> __('A custom product block.'),
			'render_template'	=> 'parts/blocks/product.php', //'render_callback'	=> 'my_acf_block_render_callback',
			// 'category'			=> 'formatting',
			'icon'				=> 'cart',
			'keywords'			=> array( 'product', 'shop', 'products' ),
		));
	}
}