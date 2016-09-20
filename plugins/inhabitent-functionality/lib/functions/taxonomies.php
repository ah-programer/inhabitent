<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...





// Register Custom Taxonomy
function Inhabitent_register_product_type_() {

	$labels = array(
		'name'                       => 'product-type',
		'singular_name'              => 'product-type',
		'menu_name'                  => 'product type',
		'all_items'                  => 'All product types',
		'parent_item'                => 'Parent product type',
		'parent_item_colon'          => 'Parent product types',
		'new_item_name'              => 'New product type Name',
		'add_new_item'               => 'Add New product type Item',
		'edit_item'                  => 'Edit product type',
		'update_item'                => 'Update product type',
		'view_item'                  => 'View product type',
		'separate_items_with_commas' => 'Separate product types with commas',
		'add_or_remove_items'        => 'Add or remove product types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Items',
		'search_items'               => 'Search product types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No product types',
		'items_list'                 => 'Items list',
		'items_list_navigation'      => 'product types list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'product-type', array( 'product' ), $args );

}
add_action( 'init', 'Inhabitent_register_product_type_', 0 );
