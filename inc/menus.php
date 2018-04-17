<?php

	register_nav_menus( array(
		'main_menu' => 'Main Menu',

	) );

	add_filter('nav_menu_css_class' , function ($classes, $items) {
		if (in_array('current-menu-item', $classes) ){
			$classes[] = 'active';
		}
		return $classes;
	} , 10, 2);

