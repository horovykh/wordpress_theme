<?php get_header();?>
<!-- MAIN SECTION -->
        <section id="home-section" class="line">
            <div class="margin">
                <div class="s-12 m-7 l-9">
	                <?php
					$latest_blog_posts = new WP_Query( array('posts_per_page' => 4 ));
					if ( $latest_blog_posts->have_posts() ) {
						while ( $latest_blog_posts->have_posts() ) {
						$latest_blog_posts->the_post();
						get_template_part( 'partials/blog_entry' );
					}};?>
                </div>
	            <div class="s-12 m-5 l-3">
		            <aside>
			            <?php get_template_part('partials/sidebar_blog');?>
		            </aside>
	            </div>
            </div>
        </section>

<?php get_footer();