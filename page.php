<?php get_header(); ?>
    <main class="sbh_content-blocks rte">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>           
            <?php endwhile; ?>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>
