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

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> sbh_block-two-column sbh_fp-about">
    <div class="sbh_fp-about-content">
        <div class="sbh_fp-about-content-wrap">
            <h1><?php the_field('two_column_title'); ?></h1>
            <?php the_field('two_column_content'); ?>
        </div>
    </div>
    <?php
        $attachment_id = get_field('two_column_image');
        $size = "full";
        $image = wp_get_attachment_image_src( $attachment_id, $size );
    ?>
    <div class="sbh_fp-about-image" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;"></div>
</section>