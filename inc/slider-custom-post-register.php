<?php

// Register Custom Post Type Dynamicwp Slider 
function create_dynamicwpslider_cpt() {

	$labels = array(
		'name' => _x( 'Dynamicwp slider', 'Post Type General Name', 'dynamicwp' ),
		'singular_name' => _x( 'Dynamicwp Slider ', 'Post Type Singular Name', 'dynamicwp' ),
		'menu_name' => _x( 'Dynamicwp sliders', 'Admin Menu text', 'dynamicwp' ),
		'name_admin_bar' => _x( 'Dynamicwp Slider ', 'Add New on Toolbar', 'dynamicwp' ),
		'archives' => __( 'Dynamicwp Slider  Archives', 'dynamicwp' ),
		'attributes' => __( 'Dynamicwp Slider  Attributes', 'dynamicwp' ),
		'parent_item_colon' => __( 'Parent Dynamicwp Slider :', 'dynamicwp' ),
		'all_items' => __( 'All sliders', 'dynamicwp' ),
		'add_new_item' => __( 'Add New Dynamicwp Slider ', 'dynamicwp' ),
		'add_new' => __( 'Add New', 'dynamicwp' ),
		'new_item' => __( 'New Dynamicwp Slider ', 'dynamicwp' ),
		'edit_item' => __( 'Edit Dynamicwp Slider ', 'dynamicwp' ),
		'update_item' => __( 'Update Dynamicwp Slider ', 'dynamicwp' ),
		'view_item' => __( 'View Dynamicwp Slider ', 'dynamicwp' ),
		'view_items' => __( 'View sliders', 'dynamicwp' ),
		'search_items' => __( 'Search Dynamicwp Slider ', 'dynamicwp' ),
		'not_found' => __( 'Not found', 'dynamicwp' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'dynamicwp' ),
		'featured_image' => __( 'Featured Image', 'dynamicwp' ),
		'set_featured_image' => __( 'Set featured image', 'dynamicwp' ),
		'remove_featured_image' => __( 'Remove featured image', 'dynamicwp' ),
		'use_featured_image' => __( 'Use as featured image', 'dynamicwp' ),
		'insert_into_item' => __( 'Insert into Dynamicwp Slider ', 'dynamicwp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Dynamicwp Slider ', 'dynamicwp' ),
		'items_list' => __( 'sliders list', 'dynamicwp' ),
		'items_list_navigation' => __( 'sliders list navigation', 'dynamicwp' ),
		'filter_items_list' => __( 'Filter sliders list', 'dynamicwp' ),
	);
	$args = array(
		'label' => __( 'Dynamicwp Slider ', 'dynamicwp' ),
		'description' => __( '', 'dynamicwp' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-images-alt',
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
	register_post_type( 'dynamicwpslider', $args );

}
add_action( 'init', 'create_dynamicwpslider_cpt', 0 );