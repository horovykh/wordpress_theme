                <?php if ( in_category( 'red-right' ) ) : ?>
                <article class="post-1 line">
                <?php elseif ( in_category('green' ) ) : ?>
                <article class="post-2 right-align line">
                <?php elseif ( in_category('orange-right' ) ) : ?>
                <article class="post-3 line">
                <?php elseif ( in_category('pink' ) ) : ?>
                <article class="post-4 right-align line">
                <?php else : ?>
                <article class="margin-bottom">
                <?php endif; ?>
                    <div class="s-12 l-6 post-image">
                            <a href="<?php the_permalink();?>">
                                <?php the_post_thumbnail('homepage-thumb'); ?>
                            </a>
                        </div>
                        <div class="s-12 l-5 post-text">
                            <a href="<?php the_permalink();?>">
                                <h2><?php the_title(); ?></h2>
                            </a>
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="s-12 l-1 post-date">
                            <p class="date"><?php echo get_the_date('d'); ?></p>
                            <p class="month"><?php echo get_the_date('M'); ?></p>
                        </div>
                </article>