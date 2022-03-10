<?php get_header(); ?>
    <main class="sbh_events-archive">
        <div class="sbh_events-archive-list">
            <?php if (have_posts()) : ?>
                <ul>
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
                                    <h2>
                                        <?php if(get_field('event_details_tbc')): ?>
                                            Date TBC
                                        <?php else: ?>
                                            <?php the_field('event_details_date'); ?>
                                        <?php endif; ?>
                                    </h2>
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
    </main>
<?php get_footer(); ?>
