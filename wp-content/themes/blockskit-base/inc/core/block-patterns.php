<?php
/**
 * Block Patterns
 *
 * @since 1.0.0
 */

/**
 * Registers pattern categories for Blockskit Base
 *
 * @since 1.0.0
 * @return void
 */
function blockskit_base_register_pattern_category() {
	$block_pattern_categories = array(
		'theme' => array( 'label' => esc_html__( 'Base Theme Patterns', 'blockskit-base' ) ),
	);

	$block_pattern_categories = apply_filters( 'blockskit_base_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'blockskit_base_register_pattern_category', 9 );


