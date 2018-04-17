<?php

	add_action('init', function (){
		register_post_type( 'page_block',
			array(
				'labels'      => array(
					'name'          => __( 'Записи в блоке' ),
					'singular_name' => __( 'Запись в Блок' )
				),
				'public'      => false,
				'show_ui' => true,
				'has_archive' => false,
			)
		);
	});

	add_action('add_meta_boxes', function() {
		add_meta_box(
			'page_block_meta_location',
			'Мета данные поста',
			'post_block_meta_location_show', 'page_block', 'side');
	});

	add_action('save_post', function ($post_id){
		if(empty($_POST['location']) || $_POST['post_type'] != 'page_block') return;
		update_post_meta($post_id, 'location', $_POST['location']); return;
	});

	function post_block_meta_location_show($post){
		$value = @get_post_meta($post->ID,'location')[0];
		echo('<input type="text" name="location" class="widefat" value="'.$value.'"/>');
	}

	function get_page_block($location){
		$posts = get_posts([
			'post_type'=>'page_block',
			'meta_key'=>'location',
			'meta_value'=>$location,
			'posts_per_page'=>1
		]);
		if($posts[0]) return $posts[0];
		return false;
	}