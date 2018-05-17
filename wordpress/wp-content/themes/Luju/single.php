<?php get_header(); ?>
<main class="content" role="main">
    <article class="post tag-uifont tag-webview">
        <header class="post-header">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <footer class="post-meta">Written By <a><?php the_author(); ?></a>

                        <time class="post-date" datetime="<?php the_time('Y-n-j') ?>">On <?php the_time('Y-n-j') ?></time>
                    </footer>
        </header>
	<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
        <section class="post-content">
            <?php the_content(); ?>
        </section>
	<?php endif; ?>
        <footer class="post-footer">
            <section class="author">
                <h4><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>"> <span class="name"><?php echo get_the_author() ?></span></a></h4>
                    <p><?php the_author_description(); ?></p>
            </section>
        </footer>
        <section>
            <?php comments_template(); ?>
        </section>
    </article>
</main>
<?php get_footer(); ?>