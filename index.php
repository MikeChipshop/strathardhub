<?php get_header(); ?>
    <main class="sbh_blog-index">
        <div class="sbh_blog-index-list">
            <?php if (have_posts()) : ?>
                <ol>
                    <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <figure>
                                    <a href="<?php the_permalink(); ?>" title="Read <?php the_title(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                </figure>
                                <div class="sbh_excerpt">
                                    <h1><?php the_title(); ?></h1>
                                    <div class="sbh_excerpt-content">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </article>
                        </li>
                    <?php endwhile; ?>
                </ol>
            <?php endif; ?>
        </div>
        <div class="sbh_blog-index-sidebar">

        </div>
    </main>
<?php get_footer(); ?>
