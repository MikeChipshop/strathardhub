<?php

    // Create id attribute allowing for custom "anchor" value.
    $id = 'dvc_block-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }

    // Create class attribute allowing for custom "className" and "align" values.
    $className = 'dvc_block';
    if( !empty($block['className']) ) {
        $className .= ' ' . $block['className'];
    }
    if( !empty($block['align']) ) {
        $className .= ' align' . $block['align'];
    }
?>

<section class="sbh_fp-contact" id="sbh_contact">
    <h1 class="sbh_section-title"><?php the_field('block_contact_title','option'); ?></h1>
    <div class="sbh_contact-desc"><?php the_field('block_contact_intro','option'); ?></div>
    <div class="sbh_wrap">
        <div class="sbh_fp-contact-col-one">
            <div class="sbh_contact-address">
                <h2>Addresss</h2>
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