<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage hotel-suite
 * @since hotel-suite 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since hotel-suite 1.0
	 *
	 * @return void
	 */
	function hotel_suite_register_block_styles() {
		
		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'hotel-suite-border',
				'label' => esc_html__( 'Borders', 'hotel-suite' ),
			)
		);

		
	}
	add_action( 'init', 'hotel_suite_register_block_styles' );
}