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

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> sbh_block-type sbh_block-type-bg-<?php the_field('block_type_background'); ?>">
    <?php if(get_field('block_type_title')): ?>
        <h2 class="sbh_block-type-title"><?php the_field('block_type_title'); ?></h2>
    <?php endif; ?>
    <?php if(get_field('block_type_content')): ?>
        <div class="sbh_block-type-content rte">
            <?php the_field('block_type_content'); ?>
        </div>
    <?php endif; ?>
</section>