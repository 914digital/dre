<?php 
	// Register Custom Post Type: Properties
	
	add_action('init', 'properties_register');
	 
	function Properties_register() {
	 
		$labels = array(
			'name' => _x('Properties', 'post type general name'),
			'singular_name' => _x('Property', 'post type singular name'),
			'add_new' => _x('Add New', 'Property'),
			'add_new_item' => __('Add New Property'),
			'edit_item' => __('Edit Property'),
			'new_item' => __('New Property'),
			'view_item' => __('View Property'),
			'search_items' => __('Search Properties'),
			'not_found' =>  __('Nothing found'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => ''
		);
	 
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'menu_icon' => 'dashicons-location-alt',
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => true,
			'menu_position' => null,
			'supports' => array('title','editor','thumbnail')
		  ); 
	 
		register_post_type( 'properties' , $args );
	}

// hook into the init action and call create_Properties_taxonomies when it fires
add_action( 'init', 'create_properties_taxonomies', 0 );


function create_properties_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Properties Categories', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Properties Categories', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Properties Categories', 'textdomain' ),
		'all_items'         => __( 'All Properties Categories', 'textdomain' ),
		'parent_item'       => __( 'Parent Properties Categories', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Properties Categories:', 'textdomain' ),
		'edit_item'         => __( 'Edit Properties Categories', 'textdomain' ),
		'update_item'       => __( 'Update Properties Categories', 'textdomain' ),
		'add_new_item'      => __( 'Add New Properties Category', 'textdomain' ),
		'new_item_name'     => __( 'New Properties Category Name', 'textdomain' ),
		'menu_name'         => __( 'Properties Categories', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'property-type' ),
	);

	register_taxonomy( 'propertytype', array( 'properties' ), $args );

}
?>