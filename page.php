<?php get_header(); ?>
    <div class="sbh_wrap">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header>
                        <h1><?php the_title(); ?></h1>
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
