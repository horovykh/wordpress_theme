	<!-- MAIN SECTION -->
	<section id="article-section" class="line">
		<div class="margin">
			<!-- ARTICLES -->
			<div class="s-12 m-7 l-9">
                <article class="margin-bottom">
                    <?php while (have_posts()) { the_post();
                        get_template_part( 'partials/single','post' );
                    };?>
                </article>
			</div>
            <div class="s-12 m-5 l-3">
                <aside>
					<?php get_template_part('partials/sidebar_blog');?>
                </aside>
            </div>
        </div>
    </section>