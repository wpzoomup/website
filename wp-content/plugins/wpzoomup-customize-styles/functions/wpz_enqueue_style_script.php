<?php
add_action( 'wp_enqueue_scripts', 'wpz_enqueue_style_script' );
function wpz_enqueue_style_script() {
	wp_enqueue_style(
		'wpz_style',
		WPZOOMUP_CUSTOMIZE_STYLES_URL . '/src/css/style.css',
		[],
		filemtime( WPZOOMUP_CUSTOMIZE_STYLES_PATH . '/src/css/style.css' )
	);
	/*
	wp_enqueue_script(
		'wpz_scripts',
		WPZOOMUP_CUSTOMIZE_STYLES_PATH . '/src/js/wpz_scripts.js',
		[ 'jquery' ],
		filemtime( WPZOOMUP_CUSTOMIZE_STYLES_PATH . '/src/js/wpz_scripts.js' ),
		true
	);
	*/
}
