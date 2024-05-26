<?php

function create_posttype() {

    register_post_type( 'quartos',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Quartos' ),
                'singular_name' => __( 'Quarto' )
            ),
            'public'              => true,
			'menu_icon'           => 'dashicons-star-filled',
            'has_archive'         => true,
            'rewrite'             => array('slug' => 'quartos'),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),

        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
