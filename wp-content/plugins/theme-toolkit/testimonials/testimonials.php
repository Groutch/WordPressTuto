<?php 
if ( ! function_exists('theme_toolkit_testimonials') ) {

	// Register Custom Post Type
	function theme_toolkit_testimonials() {

		$labels = array(
			'name'                  => _x( 'Testimonials', 'Post Type General Name', 'theme-toolkit' ),
			'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'theme-toolkit' ),
			'menu_name'             => __( 'Testimonials', 'theme-toolkit' ),
			'name_admin_bar'        => __( 'Testimonials', 'theme-toolkit' ),
			'archives'              => __( 'Item Archives', 'theme-toolkit' ),
			'attributes'            => __( 'Item Attributes', 'theme-toolkit' ),
			'parent_item_colon'     => __( 'Parent Item:', 'theme-toolkit' ),
			'all_items'             => __( 'All Items', 'theme-toolkit' ),
			'add_new_item'          => __( 'Add New Item', 'theme-toolkit' ),
			'add_new'               => __( 'Add New', 'theme-toolkit' ),
			'new_item'              => __( 'New Item', 'theme-toolkit' ),
			'edit_item'             => __( 'Edit Item', 'theme-toolkit' ),
			'update_item'           => __( 'Update Item', 'theme-toolkit' ),
			'view_item'             => __( 'View Item', 'theme-toolkit' ),
			'view_items'            => __( 'View Items', 'theme-toolkit' ),
			'search_items'          => __( 'Search Item', 'theme-toolkit' ),
			'not_found'             => __( 'Not found', 'theme-toolkit' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'theme-toolkit' ),
			'featured_image'        => __( 'Featured Image', 'theme-toolkit' ),
			'set_featured_image'    => __( 'Set featured image', 'theme-toolkit' ),
			'remove_featured_image' => __( 'Remove featured image', 'theme-toolkit' ),
			'use_featured_image'    => __( 'Use as featured image', 'theme-toolkit' ),
			'insert_into_item'      => __( 'Insert into item', 'theme-toolkit' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'theme-toolkit' ),
			'items_list'            => __( 'Items list', 'theme-toolkit' ),
			'items_list_navigation' => __( 'Items list navigation', 'theme-toolkit' ),
			'filter_items_list'     => __( 'Filter items list', 'theme-toolkit' ),
		);
		$args = array(
			'label'                 => __( 'Testimonials', 'theme-toolkit' ),
			'description'           => __( 'Post type to create testimonials', 'theme-toolkit' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', ),
			'hierarchical'          => false,
			'public'                => false,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 30,
			'menu_icon'             => 'dashicons-testimonial',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => true,
			'publicly_queryable'    => false,
			'capability_type'       => 'page',
		);
		register_post_type( 'tt-testimonials', $args );

	}

}

add_action( 'init', 'theme_toolkit_testimonials', 0 );