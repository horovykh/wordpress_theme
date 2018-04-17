<?php get_header();

	if ( is_page() && !is_page('contact')) {
		get_template_part( 'single');
	}

	elseif (is_page('contact') ){
		get_template_part('contact');
	}

	elseif (have_posts()) {

		if ( is_single() ) {
			get_template_part( 'partials/loop', 'single' );
		} else {
			get_template_part( 'partials/loop', 'archive' );
		}
	}

	else { __('No Page Found');
	}

get_footer();