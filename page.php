<?php get_header(); ?>
    <?php
        $attachment_id = get_field('hero_image');
        $size = "full";
        $image = wp_get_attachment_image_src( $attachment_id, $size );
    ?>
    <div class="sbh_fp-hero" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;">
        <div class="sbh_wrap">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
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
