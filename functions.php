<?php

	if (!defined(ASSETS_URL)) {define( 'ASSETS_URL', get_template_directory_uri() . '/assets/');}

	if (!defined(INCLUDE_DIR))   {define('INCLUDE_DIR', __DIR__.DIRECTORY_SEPARATOR.'inc'.DIRECTORY_SEPARATOR);}

	add_theme_support( 'post-thumbnails');

	set_post_thumbnail_size(300,300, true );

	add_image_size( 'homepage-thumb', 600, 529, true );
	add_image_size( 'single-thumb', 1140, 565, true );

	add_post_type_support( 'page', 'excerpt' );

	function set_excerpt_lenght(){
		return 35;
	}
	add_filter('excerpt_length', 'set_excerpt_lenght');

	function change_excerpt_more() {
		return '...';
	}
	add_filter('excerpt_more', 'change_excerpt_more', 99 );

	remove_action('wp_head', 'wp_generator');

	include INCLUDE_DIR.'assets.php';
	include INCLUDE_DIR.'menus.php';
	include INCLUDE_DIR.'page_blocks.php';
	include INCLUDE_DIR.'widgets.php';
	include INCLUDE_DIR.'custom_widget_text.php';