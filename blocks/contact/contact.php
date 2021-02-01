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
                    <li><?php the_field('block_contact_address_line_one','option'); ?></li>
                    <li itemprop="streetAddress"><?php the_field('block_contact_address_line_two','option'); ?></li>
                    <li itemprop="addressLocality"><?php the_field('block_contact_address_town','option'); ?></li>
                    <li itemprop="addressRegion"><?php the_field('block_contact_address_region','option'); ?></li>
                    <li itemprop="postalCode"><?php the_field('block_contact_address_postcode','option'); ?></li>
                </ol>
            </div>
            <div class="sbh_contact-methods">
                <h2>Contact Methods</h2>
                <ul>
                    <li>Email: <a href="mailto:<?php the_field('block_contact_methods_email','option'); ?>"><?php the_field('block_contact_methods_email','option'); ?></a></li>
                    <li>Tel: <a href="tel:<?php the_field('block_contact_methods_telephone','option'); ?>"><?php the_field('block_contact_methods_telephone','option'); ?></a></li>
                    <li><?php the_field('block_contact_methods_further_information','option'); ?></li>
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
            <?php $shortcode = get_field('block_contact_form_embed','option'); ?>
            <?php echo do_shortcode($shortcode); ?>
            <div class="sbh_google-terms"><?php the_field('block_contact_form_captcha_notice','option'); ?></div>
        </div>
    </div>
</section>