<?php 

// Register Custom Post Type Dynamicwp Gallery
function create_dynamicwpgallery_cpt() {

	$labels = array(
		'name' => _x( 'Dynamic Gallery', 'Post Type General Name', 'dynamicwp' ),
		'singular_name' => _x( 'Dynamicwp Gallery', 'Post Type Singular Name', 'dynamicwp' ),
		'menu_name' => _x( 'Gallery', 'Admin Menu text', 'dynamicwp' ),
		'name_admin_bar' => _x( 'Dynamicwp Gallery', 'Add New on Toolbar', 'dynamicwp' ),
		'archives' => __( 'Dynamicwp Gallery Archives', 'dynamicwp' ),
		'attributes' => __( 'Dynamicwp Gallery Attributes', 'dynamicwp' ),
		'parent_item_colon' => __( 'Parent Dynamicwp Gallery:', 'dynamicwp' ),
		'all_items' => __( 'All Galleries', 'dynamicwp' ),
		'add_new_item' => __( 'Add New Dynamicwp Gallery', 'dynamicwp' ),
		'add_new' => __( 'Add New', 'dynamicwp' ),
		'new_item' => __( 'New Dynamicwp Gallery', 'dynamicwp' ),
		'edit_item' => __( 'Edit Dynamicwp Gallery', 'dynamicwp' ),
		'update_item' => __( 'Update Dynamicwp Gallery', 'dynamicwp' ),
		'view_item' => __( 'View Dynamicwp Gallery', 'dynamicwp' ),
		'view_items' => __( 'View Galleries', 'dynamicwp' ),
		'search_items' => __( 'Search Dynamicwp Gallery', 'dynamicwp' ),
		'not_found' => __( 'Not found', 'dynamicwp' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'dynamicwp' ),
		'featured_image' => __( 'Featured Image', 'dynamicwp' ),
		'set_featured_image' => __( 'Set featured image', 'dynamicwp' ),
		'remove_featured_image' => __( 'Remove featured image', 'dynamicwp' ),
		'use_featured_image' => __( 'Use as featured image', 'dynamicwp' ),
		'insert_into_item' => __( 'Insert into Dynamicwp Gallery', 'dynamicwp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Dynamicwp Gallery', 'dynamicwp' ),
		'items_list' => __( 'Galleries list', 'dynamicwp' ),
		'items_list_navigation' => __( 'Galleries list navigation', 'dynamicwp' ),
		'filter_items_list' => __( 'Filter Galleries list', 'dynamicwp' ),
	);
	$args = array(
		'label' => __( 'Dynamicwp Gallery', 'dynamicwp' ),
		'description' => __( '', 'dynamicwp' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-image',
		'supports' => array('title', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'dynamicwpgallery', $args );

}
add_action( 'init', 'create_dynamicwpgallery_cpt', 0 );