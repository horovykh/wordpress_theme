<?php

	add_action('wp_enqueue_scripts', function (){

		wp_enqueue_style('first_style', ASSETS_URL.'css/components.css');
		wp_enqueue_style('second_style', ASSETS_URL.'css/icons.css');
		wp_enqueue_style('main_style', ASSETS_URL.'css/responsee.css');
		wp_enqueue_style('custom_style', ASSETS_URL.'css/template-style.css');

		wp_deregister_script('jquery');
		wp_register_script( 'jquery_main', ASSETS_URL. 'js/jquery-1.8.3.min.js');
		wp_enqueue_script( 'jquery_main');
		wp_register_script('jquery_ui', ASSETS_URL. 'js/jquery-ui.min.js');
		wp_enqueue_script('jquery_ui');
		wp_enqueue_script('main_script', ASSETS_URL. 'js/responsee.js', 'jquery_ui', '1.0.0', true);

	});

	function img($name, $echo = true) {
		$img_path = ASSETS_URL.'img/'.$name;
		if ($echo) echo $img_path;
		return $img_path;
	}

	add_action('wp_enqueue_scripts', function (){
	echo ('
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>'.wp_get_document_title().'</title>
	<meta name="description" content="Amazing responsive Blog template.">
	<meta name="keywords" content="free, responsive, blog, web site, template">
	<link rel="icon" href="'.ASSETS_URL.'img/favicon.ico'.'">
    <link href=\'//fonts.googleapis.com/css?family=Roboto:400,100,300,700&subset=latin,latin-ext\' rel=\'stylesheet\' type=\'text/css\'>
	');
});

	add_filter( 'document_title_separator', function(){
		return '–';
	});

	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');