<?php
/**
 * Custom post type for Hlc Home Content Block pages
 */
class Hlc_Post_Type_HomeContent extends Hlc_Post_Type {
	/**
	 * Name of the custom post type.
	 *
	 * @var string
	 */
	public $name = 'homecontent';
	/**
	 * Creates the post type.
	 */
	public function create_post_type() {
		$labels = array(
			'name'                  => _x( 'Home Content Blocks', 'Post type general name', 'hlc' ),
			'singular_name'         => _x( 'Home Content Block', 'Post type singular name', 'hlc' ),
			'menu_name'             => _x( 'Home Content Blocks', 'Admin Menu text', 'hlc' ),
			'name_admin_bar'        => _x( 'Home Content Block', 'Add New on Toolbar', 'hlc' ),
			'add_new'               => __( 'Add New', 'hlc' ),
			'add_new_item'          => __( 'Add New Home Content Block', 'hlc' ),
			'new_item'              => __( 'New Home Content Block', 'hlc' ),
			'edit_item'             => __( 'Edit Home Content Block', 'hlc' ),
			'view_item'             => __( 'View Home Content Block', 'hlc' ),
			'all_items'             => __( 'All Home Content Blocks', 'hlc' ),
			'search_items'          => __( 'Search Home Content Blocks', 'hlc' ),
			'parent_item_colon'     => __( 'Parent Home Content Blocks', 'hlc' ),
			'not_found'             => __( 'No home content blocks found.', 'hlc' ),
			'not_found_in_trash'    => __( 'No home content blocks found in Trash.', 'hlc' ),
			'insert_into_item'      => _x( 'Insert into home content block', 'Overrides the "Insert into post"/"Insert into page" phrase (used when inserting media into a post). Added in 4.4', 'hlc' ),
			'uploaded_to_this_item' => _x( 'Uploaded to this home content block', 'Overrides the "Uploaded to this post"/"Uploaded to this page" phrase (used when viewing media attached to a post). Added in 4.4', 'hlc' ),
			'filter_items_list'     => _x( 'Filter home content block list', 'Screen reader text for the filter links heading on the post type listing screen. Default "Filter posts list"/"Filter pages list". Added in 4.4', 'hlc' ),
			'items_list_navigation' => _x( 'Home Content Block list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default "Posts list navigation"/"Pages list navigation". Added in 4.4', 'hlc' ),
			'items_list'            => _x( 'Home Content Block list', 'Screen reader text for the items list heading on the post type listing screen. Default "Posts list"/"Pages list". Added in 4.4', 'hlc' ),
		);
		register_post_type( $this->name, array(
			'labels'              => $labels,
			'public'              => true,
			'publicly_queryable'  => false,
			'exclude_from_search' => true,
			'has_archive'         => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'query_var'           => true,
			'menu_icon'           => 'dashicons-layout',
			'rewrite'             => array( 'slug' => 'homecontent' ),
			'hierarchical'        => true,
			'supports'            => array( 'title', 'author', 'thumbnail' ),
		) );
	}
}
$post_type_hlc_home_content = new Hlc_Post_Type_HomeContent();