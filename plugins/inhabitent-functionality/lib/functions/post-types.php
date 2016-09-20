<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...





// Register Custom Post Type
function inhabitent_registerproduct_cpt() {

	$labels = array(
		'name'                  => 'products',
		'singular_name'         => 'product',
		'menu_name'             => 'products',
		'name_admin_bar'        => 'Post Type',
		'archives'              => 'products Archives',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All product',
		'add_new_item'          => 'Add New product',
		'add_new'               => 'Add New',
		'new_item'              => 'New product',
		'edit_item'             => 'Edit product',
		'update_item'           => 'UpdateItem',
		'view_item'             => 'View Item',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'product Image',
		'set_featured_image'    => 'Set product image',
		'remove_featured_image' => 'Remove product image',
		'use_featured_image'    => 'Use as product image',
		'insert_into_item'      => 'Insert into product',
		'uploaded_to_this_item' => 'Uploaded to this product',
		'items_list'            => 'product list',
		'items_list_navigation' => 'product list navigation',
		'filter_items_list'     => 'Filter product list',
	);
	$args = array(
		'label'                 => 'product',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'products',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'inhabitent_registerproduct_cpt', 0 );

// Register Custom Post Type
function inhabitent_adventure_post_type() {

	$labels = array(
		'name'                  => 'adventure',
		'singular_name'         => 'adventure',
		'menu_name'             => 'Adventures',
		'name_admin_bar'        => 'Adventures',
		'archives'              => 'Adventures Archives',
		'parent_item_colon'     => 'parent Adventures',
		'all_items'             => 'All Adventures',
		'add_new_item'          => 'Add New Adventures',
		'add_new'               => 'Add New',
		'new_item'              => 'NewAdventures',
		'edit_item'             => 'EditAdventures',
		'update_item'           => 'Update Adventures',
		'view_item'             => 'View Adventures',
		'search_items'          => 'Search Adventures',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into adventures',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Adventures list',
		'items_list_navigation' => 'Adventures list navigation',
		'filter_items_list'     => 'Filter adventures list',
	);
	$args = array(
		'label'                 => 'adventure',
		'description'           => 'Adventure Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dishicons.palmtree',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'Adventures',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'adventure', $args );

}
add_action( 'init', 'inhabitent_adventure_post_type', 0 );
