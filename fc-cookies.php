<?php
/****************************************************
	Register Fortune Cookies Post Type
*****************************************************/

function fc_cookies() {

	$fc_fortune_cookies_labels = array(

		'name'               => _x( 'Fortune cookies', 'post type general name', 'fc' ),
		'singular_name'      => _x( 'Fortunce cookie', 'post type singular name', 'fc' ),
		'menu_name'          => _x( 'Fortune cookies', 'admin menu', 'fc' ),
		'name_admin_bar'     => _x( 'Fortunce cookie', 'add new on admin bar', 'fc' ),
		'add_new'            => _x( 'Add New', 'Fortunce cookie', 'fc' ),
		'add_new_item'       => __( 'Add New Fortunce cookie', 'fc' ),
		'new_item'           => __( 'New Fortunce cookie', 'fc' ),
		'edit_item'          => __( 'Edit Fortunce cookie', 'fc' ),
		'view_item'          => __( 'View Fortunce cookie', 'fc' ),
		'all_items'          => __( 'All Fortune cookies', 'fc' ),
		'search_items'       => __( 'Search Fortune cookies', 'fc' ),
		'parent_item_colon'  => __( 'Parent Fortune cookies:', 'fc' ),
		'not_found'          => __( 'No fortune cookies found.', 'fc' ),
		'not_found_in_trash' => __( 'No fortune cookies found in Trash.', 'fc' )
	
	);

	$fc_fortune_cookies_args = array(

		'labels'             => $fc_fortune_cookies_labels,
	    'description'        => __( 'Fortune cookies', 'fc' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'fortune-cookie' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon'			 => 'dashicons-format-quote',	
		'supports'           => array( 'title', 'editor', 'revisions' )
	
	);

	$fc_fortune_cookies = register_post_type( 'fortune-cookie', $fc_fortune_cookies_args );
}
add_action( 'init', 'fc_cookies' );

function fc_single_template( $single ) {
	    
    global $post;
    $template = plugin_dir_path( __FILE__ ) . 'templates/single-cookie.php';
	// Checks for single template by post type 
	if ( $post->post_type == "fortune-cookie" ) {
		//if( file_exists( $template ) )
	        return $template;
	}
	return $single;
	
}
add_filter( 'single_template', 'fc_single_template' );

function fc_archive_template( $archive ) {

    global $post;
    $template = plugin_dir_path( __FILE__ ) . 'templates/archive-cookies.php';
    // Checks for archive template by post type 
    if ( $post->post_type == "fortune-cookie" ) {
        //if( file_exists( $template ) )
            return $template;
    }
    return $archive;

}
add_filter( 'archive_template', 'fc_archive_template' );