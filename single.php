<?php get_header(); ?>
    <div class="sbh_wrap">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('sbh_main-article'); ?>>
                    <header>
                        <h1><?php the_title(); ?></h1>
                        <h2>Published <time><?php the_time('jS F Y'); ?></time> in <span class="sbh_post-meta-category"><?php the_category( ', ' ); ?></span> by <span class="sbh_post-meta-category"><?php the_author(); ?></span></h2>
                    </header>
                    <div class="sbh_article-content rte">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <h1>No content</h1>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>
