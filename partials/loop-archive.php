<section id="article-section" class="line archive">
	<div class="margin">
		<!-- ARTICLES -->
		<div class="s-12 m-7 l-9">
			<?php while(have_posts()) {
				the_post();
				get_template_part('partials/archive_entry');
			}
			?>
		</div>
		<!-- SIDEBAR -->
		<div class="s-12 m-5 l-3">
			<aside>
				<!-- NEWS 1 -->
				<img src="img/news1.jpg" alt="News 1">
				<div class="aside-block margin-bottom">
					<h3>This is the first news on blog</h3>
					<p>Lorem ipsum dolor sit amet, conse ctetuer. Duis autem vemeu iriure dolor adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
				</div>
				<!-- AD REGION -->
				<div class="advertising margin-bottom hide-s">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- Fashion 160x600 -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:160px;height:600px"
					     data-ad-client="ca-pub-8115128083480193"
					     data-ad-slot="7468355662"></ins>
					<script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
				<!-- NEWS 2 -->
				<img src="<?php img('news2.jpg');?> alt="News 2">
				<div class="aside-block margin-bottom">
					<h3>Second news on the fashion blog</h3>
					<p>Lorem ipsum dolor sit amet, conse ctetuer. Duis autem vemeu iriure dolor adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
				</div>
				<!-- AD REGION -->
				<div class="advertising margin-bottom hide-s">
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- Fashion 160x600 -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:160px;height:600px"
					     data-ad-client="ca-pub-8115128083480193"
					     data-ad-slot="7468355662"></ins>
					<script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
			</aside>
		</div>
	</div>
</section>