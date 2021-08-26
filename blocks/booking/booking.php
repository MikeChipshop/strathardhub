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

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> sbh_block-booking">
    <div class="sbh_booking-form">
        <iframe src="https://strathardhub.skedda.com/booking?embedded=true"></iframe>
    </div>
</section>