<?php
/**
 * Custom Fields for Home Content Block Custom Post Type
 *
 * @package hlc
 */

/**
 * Initialize Custom Fields
 */
function hlc_home_content_fields() {
	$homecontent_location = new Fieldmanager_Select( array(
		'label'       => esc_html__( 'Location', 'hlc' ),
		'name'        => 'homecontent_location',
		'limit'       => 1,
		'sortable'    => false,
		'first_empty' => true,
		'options'     => array(
			'block-1'    => esc_html__( 'Block One', 'hlc' ),
			'block-2'    => esc_html__( 'Block Two', 'hlc' ),
			'block-3'    => esc_html__( 'Block Three', 'hlc' ),
			'block-4'    => esc_html__( 'Block Four', 'hlc' ),
			'block-5'    => esc_html__( 'Block Five', 'hlc' ),
			'block-6'    => esc_html__( 'Block Six', 'hlc' ),
		),
	) );

	$homecontent_fields = new Fieldmanager_Group( array(
		'name'        => 'homecontent_block',
		'limit'       => 1,
		'sortable'    => false,
		'collapsible' => false,
		'children'    => array(
			'block_url'        => new Fieldmanager_Link( esc_html__( 'Block URL', 'hlc' ) ),
			'block_text'        => new Fieldmanager_RichTextArea( esc_html__( 'Block Text', 'hlc' ) ),
		),
	) );

	$homecontent_location->add_meta_box( esc_html__( 'Home Content Block Location', 'hlc' ), 'homecontent' );
	$homecontent_fields->add_meta_box( esc_html__( 'Home Content Block Details', 'hlc' ), 'homecontent' );
}
add_action( 'fm_post_homecontent', 'hlc_home_content_fields' );