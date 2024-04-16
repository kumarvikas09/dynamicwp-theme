<?php

// Register Custom Post Type Album Gallery
function create_albumgallery_cpt() {

	$labels = array(
		'name' => _x( 'Albums', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Album Gallery', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Albums', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Album Gallery', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Album Gallery Archives', 'textdomain' ),
		'attributes' => __( 'Album Gallery Order', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Album Gallery:', 'textdomain' ),
		'all_items' => __( 'All Albums', 'textdomain' ),
		'add_new_item' => __( 'Add New Album Gallery', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Album Gallery', 'textdomain' ),
		'edit_item' => __( 'Edit Album Gallery', 'textdomain' ),
		'update_item' => __( 'Update Album Gallery', 'textdomain' ),
		'view_item' => __( 'View Album Gallery', 'textdomain' ),
		'view_items' => __( 'View Albums', 'textdomain' ),
		'search_items' => __( 'Search Album Gallery', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Album Gallery', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Album Gallery', 'textdomain' ),
		'items_list' => __( 'Albums list', 'textdomain' ),
		'items_list_navigation' => __( 'Albums list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Albums list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Album Gallery', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-gallery',
		'supports' => array('title', 'thumbnail', 'custom-fields', 'page-attributes', 'post-formats'),
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
	register_post_type( 'albumgallery', $args );

}
add_action( 'init', 'create_albumgallery_cpt', 0 );