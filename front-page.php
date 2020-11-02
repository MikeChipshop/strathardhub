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
        <div class="sbh_hero-actions">
            <a href="https://strathardhub.com/book">Book Now</a>
            <button><?php the_field('hero_button_text'); ?></button>
        </div>
    </div>
</div>
<main class="sbh_content-blocks">
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>
</main>
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
            <div class="sbh_google-terms">
                This site is protected by reCAPTCHA and the Google <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">Privacy Policy</a> and <a href="https://policies.google.com/terms" target="_blank" rel="noopener noreferrer">Terms of Service</a> apply.
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
