<?php get_header(); ?>
            <main id="content" class="content" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="post tag-uifont tag-webview">
                    <header class="post-header">
                         <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </header>
                    <section class="post-excerpt">
                        <p><?php the_excerpt(); ?>
                        </p>
                    </section>
                    <footer class="post-meta">Written By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>"><?php the_author(); ?></a>

                        <time class="post-date" datetime="<?php the_time('Y-n-j') ?>">On <?php the_time('Y-n-j') ?></time>
                    </footer>
                </article>
		<?php endwhile; ?>
		<?php else : ?>
		<h3 class="title"><a href="#" rel="bookmark">未找到</a></h3>
		<p>没有找到任何文章！</p>
		<?php endif; ?>
	</div>
                <nav class="pagination" role="navigation"> <span class="page-number">Page 1 of 4</span>
 <a class="older-posts" href="/page/2/">Older Posts <span aria-hidden="true">&rarr;</span></a>

                </nav>
            </main>
<?php get_footer(); ?>