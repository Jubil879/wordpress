<?php
/**
 * Initiate core files
 */
add_action( 'after_setup_theme', function() {
	include get_template_directory() . '/inc/core/block-patterns.php';
	include get_template_directory() . '/inc/core/block-styles.php';
});