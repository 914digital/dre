<?php 
	// Register Custom Post Type: Team
	
	add_action('init', 'team_register');
	 
	function team_register() {
	 
		$labels = array(
			'name' => _x('Team', 'post type general name'),
			'singular_name' => _x('Team Member', 'post type singular name'),
			'add_new' => _x('Add New', 'Team Member item'),
			'add_new_item' => __('Add New Team Member'),
			'edit_item' => __('Edit Team Member'),
			'new_item' => __('New Team Member'),
			'view_item' => __('View Team Member Item'),
			'search_items' => __('Search Team Members'),
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
			'menu_icon' => 'dashicons-groups',
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => true,
			'menu_position' => null,
			'supports' => array('title','editor','thumbnail')
		  ); 
	 
		register_post_type( 'team' , $args );
	}

// hook into the init action and call create_team_taxonomies when it fires
add_action( 'init', 'create_team_taxonomies', 0 );


function create_team_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Team Categories', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Team Categories', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Team Categories', 'textdomain' ),
		'all_items'         => __( 'All Team Categories', 'textdomain' ),
		'parent_item'       => __( 'Parent Team Categories', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Team Categories:', 'textdomain' ),
		'edit_item'         => __( 'Edit Team Categories', 'textdomain' ),
		'update_item'       => __( 'Update Team Categories', 'textdomain' ),
		'add_new_item'      => __( 'Add New Team Category', 'textdomain' ),
		'new_item_name'     => __( 'New Team Category Name', 'textdomain' ),
		'menu_name'         => __( 'Team Categories', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'team-categories' ),
	);

	register_taxonomy( 'team-categories', array( 'team' ), $args );

}
?>