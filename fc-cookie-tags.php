<?php
/****************************************************
	Register Fortune Cookies Tags
*****************************************************/

function fc_fortune_cookie_tags() {

	$fc_fortune_cookie_tags_labels = array(
		'name'                       => _x( 'Fortune cookie tags', 'taxonomy general name', 'fc' ),
		'singular_name'              => _x( 'Fortune cookie tag', 'taxonomy singular name', 'fc' ),
		'search_items'               => __( 'Search Fortune cookie tags', 'fc' ),
		'popular_items'              => __( 'Popular Fortune cookie tags', 'fc' ),
		'all_items'                  => __( 'All Fortune cookie tags', 'fc' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Fortune cookie tag', 'fc' ),
		'update_item'                => __( 'Update Fortune cookie tag', 'fc' ),
		'add_new_item'               => __( 'Add New Fortune cookie tag', 'fc' ),
		'new_item_name'              => __( 'New Fortune cookie tag Name', 'fc' ),
		'separate_items_with_commas' => __( 'Separate fortune cookie tags with commas', 'fc' ),
		'add_or_remove_items'        => __( 'Add or remove fortune cookie tags', 'fc' ),
		'choose_from_most_used'      => __( 'Choose from the most used fortune cookie tags', 'fc' ),
		'not_found'                  => __( 'No fortune cookie tags found.', 'fc' ),
		'menu_name'                  => __( 'Fortune cookie tags', 'fc' ),
	);

	$fc_fortune_cookie_tags_args = array(
		'hierarchical'          => false,
		'labels'                => $fc_fortune_cookie_tags_labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'fortune-cookies-tags' )
	);

	register_taxonomy( 'fortune-cookies-tags', 'fortune-cookie', $fc_fortune_cookie_tags_args );
	
}//sh_cities_taxonomy
add_action( 'init', 'fc_fortune_cookie_tags' );
