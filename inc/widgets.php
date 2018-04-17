<?php

	add_action('widgets_init', function () {
		register_sidebar([
			'name' => 'Сайдбар',
			'id' => 'aside-sidebar',
			'before_widget' => '<div class="aside-block margin-bottom">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>'
		]);
	});

	add_action('widgets_init', function () {
		register_widget( 'custom_widget_text' );
	});
