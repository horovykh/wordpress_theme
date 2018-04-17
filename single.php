<!-- MAIN SECTION -->
<section id="article-section" class="line">
	<div class="margin">
		<!-- ARTICLES -->
		<div class="s-12 m-7 l-9">
			<!-- ARTICLE 1 -->
			<article class="margin-bottom">
				<!-- text -->
				<div class="post-text">
					<?php while (have_posts()) { the_post();
						the_content();
					}; ?>
				</div>
			</article>
            <!-- AD REGION -->
            <div class="line">
                <div class="advertising horizontal">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Fashion Blog -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8115128083480193" data-ad-slot="9121305263" data-ad-format="auto"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
		</div>
        <div class="s-12 m-5 l-3">
            <aside>
				<?php get_template_part('partials/sidebar_blog');?>
            </aside>
        </div>
    </div>
</section>