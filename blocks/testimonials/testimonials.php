<?php

    // Create id attribute allowing for custom "anchor" value.
    $id = 'sbh_block-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }

    // Create class attribute allowing for custom "className" and "align" values.
    $className = 'sbh_block';
    if( !empty($block['className']) ) {
        $className .= ' ' . $block['className'];
    }
    if( !empty($block['align']) ) {
        $className .= ' align' . $block['align'];
    }
?>

<?php if(is_admin()): ?>
    <h1 class="sbh_section-title">Testimonials</h1>
<?php else: ?>
    <section id="<?php echo esc_attr($id); ?> sbh_testimonials" class="<?php echo esc_attr($className); ?> sbh_block-testimonial sbh_fp-testimonials">
        <h1 class="sbh_section-title">Testimonials</h1>
        <div class="sbh_wrap">
            <?php
                $testimonialargs = array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => -1,
                    'orderby'   => 'rand'
                );
            ?>
            <?php $testimonialloop = new WP_Query( $testimonialargs ); ?>
            <?php if ( $testimonialloop->have_posts() ): ?>
                <div class="sbh_testimonail-slider">
                    <div class="sbh_testimonail-slider-item">
                        <?php while ( $testimonialloop->have_posts() ) : $testimonialloop->the_post(); ?>
                            <div class="
                                sbh_single-testimonial
                                <?php if(get_field('testimonial_image', get_the_ID())): ?>
                                has-image
                                <?php endif; ?>
                            ">
                                <?php if(get_field('testimonial_image', get_the_ID())): ?>
                                    <?php
                                        $attachment_id = get_field('testimonial_image', get_the_ID());
                                        $size = "testimonial";
                                        $image = wp_get_attachment_image_src( $attachment_id, $size );
                                    ?>
                                    <figure><img src="<?php echo $image[0]; ?>" alt=""></figure>
                                <?php endif; ?>
                                <div class="sbh_testimonial-content">
                                    <blockquote>
                                        <?php the_field('testimonial_quote', get_the_ID()); ?>
                                    </blockquote>
                                    <cite>
                                        <?php if(get_field('testimonial_cite_link', get_the_ID())): ?>
                                            <a href="<?php the_field('testimonial_cite_link', get_the_ID()); ?>" title="" target="_blank" rel="noreferrer">
                                        <?php endif; ?>
                                            <?php if(get_field('testimonial_cite_name', get_the_ID())): ?><?php the_field('testimonial_cite_name', get_the_ID()); ?><?php endif; ?>
                                            <?php if(get_field('testimonial_cite_business', get_the_ID())): ?> - <?php the_field('testimonial_cite_business', get_the_ID()); ?><?php endif; ?>
                                        <?php if(get_field('testimonial_cite_link', get_the_ID())): ?></a><?php endif; ?>
                                    </cite>
                                </div>
                            </div>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>