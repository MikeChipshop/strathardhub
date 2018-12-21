<?php get_header(); ?>
<?php
    $attachment_id = get_field('hero_image');
    $size = "full";
    $image = wp_get_attachment_image_src( $attachment_id, $size );
?>
<div class="sbh_fp-hero" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;">
    <div class="sbh_wrap">
        <h2><?php the_field('hero_call_to_action'); ?></h2>
        <h3><?php the_field('hero_subheading'); ?></h3>
        <button><?php the_field('hero_button_text'); ?></button>
    </div>
</div>
<section class="sbh_fp-facilities" id="sbh_facilities">
    <h1 class="sbh_section-title"><?php the_field('facilities_section_title'); ?></h1>
    <div class="sbh_fp-facilities-wrap">
        <ul>
            <?php if( have_rows('facilities_list') ): ?>
                <?php while ( have_rows('facilities_list') ) : the_row(); ?>
                    <li>
                        <div class="sbh_fp-facilities-fig">
                            <i class="fal fa-<?php the_sub_field('facility_icon'); ?>"></i>
                        </div>
                        <h2><?php the_sub_field('facility_name'); ?></h2>
                        <div><?php the_sub_field('facility_description'); ?></div>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
</section>

<section class="sbh_fp-about" id="sbh_about">
    <div class="sbh_fp-about-content">
        <div class="sbh_fp-about-content-wrap">
            <h1><?php the_field('about_title'); ?></h1>
            <?php the_field('about_content'); ?>
        </div>
    </div>
    <?php
        $attachment_id = get_field('about_image');
        $size = "full";
        $image = wp_get_attachment_image_src( $attachment_id, $size );
    ?>
    <div class="sbh_fp-about-image" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;"></div>
</section>
<section class="sbh_fp-testimonials" id="sbh_testimonials">
    <h1 class="sbh_section-title"><?php the_field('testimonials_section_title'); ?></h1>
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
                    <?php if(get_field('testimonial_image')): ?>
                     has-image
                    <?php endif; ?>
                ">
                    <?php if(get_field('testimonial_image')): ?>
                        <?php
                            $attachment_id = get_field('testimonial_image');
                            $size = "testimonial";
                            $image = wp_get_attachment_image_src( $attachment_id, $size );
                        ?>
                        <figure><img src="<?php echo $image[0]; ?>" alt=""></figure>
                    <?php endif; ?>
                    <div class="sbh_testimonial-content">
                        <blockquote>
                            <?php the_field('testimonial_quote'); ?>
                        </blockquote>
                        <cite>
                            <?php if(get_field('testimonial_cite_link')): ?>
                                <a href="<?php the_field('testimonial_cite_link'); ?>" title="" target="_blank" rel="noreferrer">
                            <?php endif; ?>
                                <?php if(get_field('testimonial_cite_name')): ?><?php the_field('testimonial_cite_name'); ?><?php endif; ?>
                                <?php if(get_field('testimonial_cite_business')): ?> - <?php the_field('testimonial_cite_business'); ?><?php endif; ?>
                            <?php if(get_field('testimonial_cite_link')): ?></a><?php endif; ?>
                        </cite>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<section class="sbh_fp-contact" id="sbh_contact">
    <h1 class="sbh_section-title">Contact the Hub</h1>
    <div class="sbh_contact-desc">
        Strathard Hub is based above the tourist centre on Aberfoyle Main Street.
    </div>
    <div class="sbh_wrap">
        <div class="sbh_fp-contact-col-one">
            <div class="sbh_contact-address">
                <h2>Address</h2>
                <ol itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <li>Strathard Business Hub</li>
                    <li itemprop="streetAddress">1st Floor, Trossachs Discovery Centre, Main Street</li>
                    <li itemprop="addressLocality">Aberfoyle</li>
                    <li itemprop="addressRegion">Stirlingshire</li>
                    <li itemprop="postalCode">FK8 3UQ</li>
                </ol>
            </div>
            <div class="sbh_contact-methods">
                <h2>Contact Methods</h2>
                <ul>
                    <li>Email: <a href="mailto:hello@strathardhub.com">hello@strathardhub.com</a></li>
                    <li>Tel: <a href="tel:01877382974">01877 382 974</a></li>
                    <li>Or use the handy contact form provided</li>
                </ul>
            </div>
            <div class="sbh_contact-social">
                <h2>Be Social</h2>
                <ul>
                    <li>
                        <a href="https://www.linkedin.com/in/strathard-business-hub-50516515b/" target="_blank" rel="noreferrer">
                            <span class="fa-stack fa-2x">
                                <i class="fas fa-square fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/pg/strathardbusinesshub" target="_blank" rel="noreferrer">
                            <span class="fa-stack fa-2x">
                                <i class="fas fa-square fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/strathardhub" target="_blank" rel="noreferrer">
                            <span class="fa-stack fa-2x">
                                <i class="fas fa-square fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sbh_fp-contact-col-two">
            <?php echo do_shortcode('[contact-form-7 id="72" title="Contact Form"]'); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
