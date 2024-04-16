<?php


// Register Custom Post Type Metabox-Testing
function create_metaboxtesting_cpt() {

	$labels = array(
		'name' => _x( 'Metabox-Testings', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Metabox-Testing', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Metabox-Testings', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Metabox-Testing', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Metabox-Testing Archives', 'textdomain' ),
		'attributes' => __( 'Metabox-Testing Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Metabox-Testing:', 'textdomain' ),
		'all_items' => __( 'All Metabox-Testings', 'textdomain' ),
		'add_new_item' => __( 'Add New Metabox-Testing', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Metabox-Testing', 'textdomain' ),
		'edit_item' => __( 'Edit Metabox-Testing', 'textdomain' ),
		'update_item' => __( 'Update Metabox-Testing', 'textdomain' ),
		'view_item' => __( 'View Metabox-Testing', 'textdomain' ),
		'view_items' => __( 'View Metabox-Testings', 'textdomain' ),
		'search_items' => __( 'Search Metabox-Testing', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Metabox-Testing', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Metabox-Testing', 'textdomain' ),
		'items_list' => __( 'Metabox-Testings list', 'textdomain' ),
		'items_list_navigation' => __( 'Metabox-Testings list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Metabox-Testings list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Metabox-Testing', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-buddicons-groups',
		'supports' => array('custom-fields', 'title'),
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
	register_post_type( 'metaboxtesting', $args );

}
add_action( 'init', 'create_metaboxtesting_cpt', 0 );