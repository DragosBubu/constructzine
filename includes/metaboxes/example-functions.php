<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'ti_';

	$meta_boxes[] = array(
		'id'         => 'services_options',
		'title'      => __( 'Services Options', 'ti' ),
		'pages'      => array( 'services' ),
		'show_on'    => array(),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name' => __( 'Short Description', 'ti' ),
				'id'   => $prefix . 'services_description',
				'type' => 'textarea',
				'std'  => ''
			),
		),
	);

	$meta_boxes[] = array(
		'id'         => 'testimonials_details',
		'title'      => __( 'Testimonials Options', 'ti' ),
		'pages'      => array( 'testimonials', ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name' => __( 'Position', 'ti' ),
				'desc' => __( 'Add client position (example: C.E.O., Manager, Web Developer, etc.).', 'ti' ),
				'id'   => $prefix . 'testimonials_position',
				'type' => 'text_medium',
			),
			array(
				'name' => __( 'Company Name', 'ti' ),
				'desc' => __( 'Add company name (example: ThemeIsle L.L.C., etc.).', 'ti' ),
				'id'   => $prefix . 'testimonials_company_name',
				'type' => 'text_medium',
			),
			array(
				'name' => __( 'Company URL', 'ti' ),
				'desc' => __( 'Add company link (example: http://www.themeisle.com, etc.).', 'ti' ),
				'id'   => $prefix . 'testimonials_company_url',
				'type' => 'text_medium',
			),
		),
	);

	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}
