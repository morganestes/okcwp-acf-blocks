<?php
/**
 * Plugin Name: OKCWP ACF Blocks
 */

namespace OKCWP\Blocks;

/**
 * Add a custom block category for OKCWP.
 */
add_filter( 'block_categories', function ( $block_categories ) {
	$block_categories[] =
		[
			'slug'  => 'okcwp',
			'title' => __( 'OKC WP User Group', 'okcwp' ),
			'icon'  => 'wordpress-alt',
		];

	return $block_categories;
}, 10, 1 );

/**
 * Register editor blocks with ACF.
 */
function register_blocks() {

	// register a testimonial block.
	acf_register_block_type( [
		'name'            => 'testimonial', // Becomes acf/testimonial.
		'title'           => __( 'OKCWP Testimonial', 'okcwp' ),
		'description'     => __( 'A custom testimonial block.', 'okcwp' ),
		'render_template' => plugin_dir_path( __FILE__ ) . 'block-templates/testimonial.php',
		//		'render_callback' => function () {
		//			esc_html_e( 'This is my testimonial block.', 'okcwp' );
		//		},
		'category'        => 'okcwp', // Can use core or custom.
		'icon'            => 'admin-comments',
		'keywords'        => [ 'testimonial', 'quote' ],
		'mode'            => 'auto',
	] );
}

add_action( 'acf/init', __NAMESPACE__ . '\\register_blocks' );
