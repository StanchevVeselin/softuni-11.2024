<?php

/**
 * Register a custom post type called "Services".
 *
 * @see get_post_type_labels() for label keys.
 */

if(! class_exists('Softuni_Therapists')) :

class Softuni_Therapists{
	public function __construct(){
		add_action( 'init', array($this, 'softuni_therapists') );
	}

	/**
 * Register our custom  taxonomy category.
 *
 * @see get_post_type_labels() for label keys.
 */

 public function softuni_therapists() {

    _e("Hardcoded string", "softuni");

	$labels = array(
		'name'                  => _x( 'Therapists items', 'Post type general name', 'softuni' ),
		'singular_name'         => _x( 'Therapists', 'Post type singular name', 'softuni' ),
		'menu_name'             => _x( 'Therapists items', 'Admin Menu text', 'softuni' ),
		'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'softuni' ),
		'add_new'               => __( 'Add New', 'softuni' ),
		'add_new_item'          => __( 'Add New Service', 'softuni' ),
		'new_item'              => __( 'New Therapists', 'softuni' ),
		'edit_item'             => __( 'Edit Therapists', 'softuni' ),
		'view_item'             => __( 'View Therapists', 'softuni' ),
		'all_items'             => __( 'All Therapists items', 'softuni' ),
		'search_items'          => __( 'Search Therapists items', 'softuni' ),
		'parent_item_colon'     => __( 'Parent Therapists items:', 'softuni' ),
		'not_found'             => __( 'No Therapists items found.', 'softuni' ),
		'not_found_in_trash'    => __( 'No Therapists items found in Trash.', 'softuni' ),
		'featured_image'        => _x( 'Therapists Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'softuni' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'softuni' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'softuni' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'softuni' ),
		'archives'              => _x( 'Therapists archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'softuni' ),
		'insert_into_item'      => _x( 'Insert into Therapists', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'softuni' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this Therapists', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'softuni' ),
		'filter_items_list'     => _x( 'Filter Therapists items list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'softuni' ),
		'items_list_navigation' => _x( 'Therapists items list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'softuni' ),
		'items_list'            => _x( 'Therapists items list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'softuni' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'therapists' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'show_in_rest'      => true,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
		);

		register_post_type( 'therapists', $args );
	}
}
endif;
$softuni_therapists = new Softuni_Therapists();







