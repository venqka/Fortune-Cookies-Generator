<?php
/****************************************************
	Register Fortune Cookie Categories
*****************************************************/

function fc_fortune_cookie_categories() {

	$fc_fortune_cookie_categories_labels = array(
		'name'                       => _x( 'Fortune cookie categories', 'taxonomy general name', 'sh' ),
		'singular_name'              => _x( 'Fortune cookie category', 'taxonomy singular name', 'sh' ),
		'search_items'               => __( 'Search Fortune cookie categories', 'sh' ),
		'popular_items'              => __( 'Popular Fortune cookie categories', 'sh' ),
		'all_items'                  => __( 'All Fortune cookie categories', 'sh' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Fortune cookie category', 'sh' ),
		'update_item'                => __( 'Update Fortune cookie category', 'sh' ),
		'add_new_item'               => __( 'Add New Fortune cookie category', 'sh' ),
		'new_item_name'              => __( 'New Fortune cookie category Name', 'sh' ),
		'separate_items_with_commas' => __( 'Separate fortune cookie categories with commas', 'sh' ),
		'add_or_remove_items'        => __( 'Add or remove fortune cookie categories', 'sh' ),
		'choose_from_most_used'      => __( 'Choose from the most used fortune Cookie Categories', 'sh' ),
		'not_found'                  => __( 'No fortune cookie categories found.', 'sh' ),
		'menu_name'                  => __( 'Fortune cookie categories', 'sh' ),
	);

	$fc_fortune_cookie_categories_args = array(
		'hierarchical'          => true,
		'labels'                => $fc_fortune_cookie_categories_labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'fortune-cookie-category' )
	);

	register_taxonomy( 'fortune-cookie-category', 'fortune-cookie', $fc_fortune_cookie_categories_args );
	
}//sh_exams_taxonomy
add_action( 'init', 'fc_fortune_cookie_categories' );
