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

<?php
    $attachment_id = get_field('block_hero_image');
    $size = "full";
    $image = wp_get_attachment_image_src( $attachment_id, $size );
?>
<div class="sbh_fp-hero" style="background:url('<?php echo $image[0]; ?>') no-repeat center center;background-size:cover;">
    <div class="sbh_wrap">
        <h2><?php the_field('block_hero_call_to_action'); ?></h2>
        <h3><?php the_field('block_hero_subheading'); ?></h3>
        <?php if(get_field('block_hero_show_buttons')): ?>
            <div class="sbh_hero-actions">
                <?php if( have_rows('block_hero_add_button') ): ?>
                    <?php while( have_rows('block_hero_add_button') ) : the_row(); ?>
                        <?php if(get_sub_field('block_hero_button_type') === 'off'): ?>
                            <a href="<?php the_sub_field('block_hero_button_target_off'); ?>"><?php the_sub_field('block_hero_button_text'); ?></a>
                        <?php else: ?>
                            <button><?php the_sub_field('block_hero_button_text'); ?></button>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>