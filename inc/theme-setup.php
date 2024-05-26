<?php

if ( ! function_exists( 'wkode_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wkode_theme_setup() {
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'custom-logo' );

		/**
		 * Specify Image Sizes
		 */

		add_image_size( 'slider', 1910, 800, true, array( 'center', 'center' ) );
		add_image_size( 'slider_mobile', 1080, 1080, true, array( 'center', 'center' ) );
		
		add_image_size( 'fancy_image', 1920, 1500, true, array( 'center', 'center' ) );

		add_image_size( 'wkode_new_bikes_single__gallery_two_cols', 275, 458, true, array( 'center', 'center' ) );
		add_image_size( 'wkode_new_bikes_single__gallery_six_cols', 845, 458, true, array( 'center', 'center' ) );
		add_image_size( 'wkode_new_bikes_single__gallery_four_cols', 560, 458, true, array( 'center', 'center' ) );
		add_image_size( 'wkode_new_bikes_single__gallery_one_by_one', 768, 768, true, array( 'center', 'center' ) );

		add_image_size( 'wkode_gallery_tourism_one_col_two_row', 312, 633, true, array( 'center', 'center' ) );
		add_image_size( 'wkode_gallery_tourism_one_col_one_row', 312, 317, true, array( 'center', 'center' ) );
		add_image_size( 'wkode_gallery_tourism_two_col_one_row', 623, 317, true, array( 'center', 'center' ) );

		add_image_size( 'wkode_carousel_main_descriptor', 1920, 1274, true, array( 'center', 'center' ) );

		add_image_size( 'quartos_images', 450, 333, true, array( 'center', 'center' ) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'wkode_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		register_nav_menus(
			array(
				'main_menu' 	=> 'Main Menu',
				'footer_menu_1' => 'Footer Menu 1',
				'footer_menu_2' => 'Footer Menu 2'
			)
		);

		// Remove post format
		remove_theme_support( 'post-formats' );

		// declare support for woocommerce
		add_theme_support( 'woocommerce' );

	}
endif; // wkode_theme_setup
add_action( 'after_setup_theme', 'wkode_theme_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function wkode_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wkode' ),
			'id'            => 'sidebar-1',
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wkode_widgets_init' );


function my_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'my_excerpt_length' );

//disable gutenberg for pages
add_filter('use_block_editor_for_post', '__return_false');

function remove_post_type_support_for_pages() 
{
    // UNCOMMENT if you want to remove some stuff
    // Replace 'page' with 'post' or a custom post/content type
    # remove_post_type_support( 'page', 'title' );
    remove_post_type_support( 'page', 'editor' );
    # remove_post_type_support( 'page', 'thumbnail' );
    remove_post_type_support( 'page', 'page-attributes' );
    remove_post_type_support( 'page', 'excerpt' );
}
add_action( 'admin_init', 'remove_post_type_support_for_pages' );

if ( function_exists( 'acf_register_block_type' ) ) {

	add_action(
		'acf/init',
		function () {

			// Register new block category.
			add_filter( 'block_categories_all', 'register_block_categories', 10, 1 );

			/**
			 * Register category for blocks
			 *
			 * @param $categories
			 *
			 * @return array
			 */
			function register_block_categories( $categories ) {
				return array_merge(
					array(
						array(
							'slug'  => 'wkode',
							'title' => __( 'WKode', 'wkode' ),
						),
					),
					$categories
				);
			}

			
		}
	);
}
