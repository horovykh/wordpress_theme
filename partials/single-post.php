
                <?php if ( in_category( 'red-right' ) ) : ?>
                <div class="post-1 line">
                <?php elseif ( in_category('green' ) ) : ?>
                <div class="post-2 line">
                <?php elseif ( in_category('orange-right' ) ) : ?>
                <div class="post-3 line">
                <?php elseif ( in_category('pink' ) ) : ?>
                <div class="post-4 line">
                <?php else : ?>
                <div class="post-5 line">
                <?php endif; ?>
					<!-- image -->
					<div class="s-12 l-11 post-image">
						<?php the_post_thumbnail('large');?>
					</div>
					<!-- date -->
					<div class="s-12 l-1 post-date">
						<p class="date"><?php echo get_the_date('d'); ?></p>
						<p class="month"><?php echo get_the_date('M'); ?></p>
					</div>
				</div>
				<!-- text -->
				<div class="post-text">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>

