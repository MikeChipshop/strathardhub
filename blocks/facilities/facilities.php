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

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> sbh_block-facilities sbh_fp-facilities">
    <h1 class="sbh_section-title"><?php the_field('facilities_section_title','option'); ?></h1>
    <div class="sbh_fp-facilities-wrap">
        <ul>
            <?php if( have_rows('facilities_list','option') ): ?>
                <?php while ( have_rows('facilities_list','option') ) : the_row(); ?>
                    <li>
                        <div class="sbh_fp-facilities-fig">
                            <?php if(get_sub_field('icon_select') == 'wifi'): ?>
                                <svg aria-hidden="true" focusable="false" data-icon="wifi" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M320 320c-44.18 0-80 35.82-80 80 0 44.19 35.83 80 80 80 44.19 0 80-35.84 80-80 0-44.18-35.82-80-80-80zm0 128c-26.47 0-48-21.53-48-48s21.53-48 48-48 48 21.53 48 48-21.53 48-48 48zm316.21-290.05C459.22-9.9 180.95-10.06 3.79 157.95c-4.94 4.69-5.08 12.51-.26 17.32l5.69 5.69c4.61 4.61 12.07 4.74 16.8.25 164.99-156.39 423.64-155.76 587.97 0 4.73 4.48 12.19 4.35 16.8-.25l5.69-5.69c4.81-4.81 4.67-12.63-.27-17.32zM526.02 270.31c-117.34-104.48-294.86-104.34-412.04 0-5.05 4.5-5.32 12.31-.65 17.2l5.53 5.79c4.46 4.67 11.82 4.96 16.66.67 105.17-93.38 264-93.21 368.98 0 4.83 4.29 12.19 4.01 16.66-.67l5.53-5.79c4.65-4.89 4.38-12.7-.67-17.2z"></path></svg>
                            <?php elseif(get_sub_field('icon_select') == 'coffee'): ?>
                                <svg aria-hidden="true" focusable="false" data-icon="coffee" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M517.9 448H26.1c-24.5 0-33.1-32-20-32h531.8c13.1 0 4.5 32-20 32zM576 159.1c.5 53.4-42.7 96.9-96 96.9h-32v32c0 53-43 96-96 96H160c-53 0-96-43-96-96V76c0-6.6 5.4-12 12-12h402.8c52.8 0 96.7 42.2 97.2 95.1zM416 96H96v192c0 35.3 28.7 64 64 64h192c35.3 0 64-28.7 64-64V96zm128 64c0-35.3-28.7-64-64-64h-32v128h32c35.3 0 64-28.7 64-64z"></path></svg>
                            <?php elseif(get_sub_field('icon_select') == 'padlock'): ?>
                                <svg aria-hidden="true" focusable="false" data-icon="lock-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 420c-11 0-20-9-20-20v-64c0-11 9-20 20-20s20 9 20 20v64c0 11-9 20-20 20zm224-148v192c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272c0-26.5 21.5-48 48-48h16v-64C64 71.6 136-.3 224.5 0 312.9.3 384 73.1 384 161.5V224h16c26.5 0 48 21.5 48 48zM96 224h256v-64c0-70.6-57.4-128-128-128S96 89.4 96 160v64zm320 240V272c0-8.8-7.2-16-16-16H48c-8.8 0-16 7.2-16 16v192c0 8.8 7.2 16 16 16h352c8.8 0 16-7.2 16-16z"></path></svg>
                            <?php elseif(get_sub_field('icon_select') == 'phone'): ?>
                                <svg aria-hidden="true" focusable="false" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M487.8 24.1L387 .8c-14.7-3.4-29.8 4.2-35.8 18.1l-46.5 108.5c-5.5 12.7-1.8 27.7 8.9 36.5l53.9 44.1c-34 69.2-90.3 125.6-159.6 159.6l-44.1-53.9c-8.8-10.7-23.8-14.4-36.5-8.9L18.9 351.3C5 357.3-2.6 372.3.8 387L24 487.7C27.3 502 39.9 512 54.5 512 306.7 512 512 307.8 512 54.5c0-14.6-10-27.2-24.2-30.4zM55.1 480l-23-99.6 107.4-46 59.5 72.8c103.6-48.6 159.7-104.9 208.1-208.1l-72.8-59.5 46-107.4 99.6 23C479.7 289.7 289.6 479.7 55.1 480z"></path></svg>
                            <?php elseif(get_sub_field('icon_select') == 'mail'): ?>
                                <svg aria-hidden="true" focusable="false" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path></svg>
                            <?php else: ?>
                                <svg aria-hidden="true" focusable="false" data-icon="handshake-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M238.4 176.6l83.1-76.2c3-2.7 6.8-4.2 10.8-4.2h101c4.3 0 8.3 1.7 11.4 4.8l60.7 59.1H632c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H518.5l-51.2-49.9c-9.1-9.1-21.1-14.1-33.9-14.1h-101c-10.4 0-20.1 3.9-28.3 10-8.4-6.5-18.7-10.3-29.3-10.3h-69.5c-12.7 0-24.9 5.1-34 14.1L121.4 128H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h126.6l59.3-59.3c3-3 7.1-4.7 11.3-4.7h69.5c.9 2.2.3.7 1.1 2.9l-59 54.1c-28.2 25.9-29.6 69.2-4.2 96.9 14.3 15.6 58.6 39.3 96.9 4.2l22.8-20.9 125.6 101.9c6.8 5.5 7.9 15.7 2.3 22.5l-9.5 11.7c-5.4 6.6-15.4 8.1-22.5 2.3l-17.8-14.4-41.5 51c-7.5 9.3-21 10.2-29.4 3.4l-30.6-26.1-10.4 12.8c-16.7 20.5-47 23.7-66.6 7.9L142 320.1H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h121.2l81.5 78c29.8 24.1 71.8 23.4 101-.2l7.2 6.2c9.6 7.8 21.3 11.9 33.5 11.9 16 0 31.1-7 41.4-19.6l21.9-26.9c16.4 8.9 42.9 9 60-12l9.5-11.7c6.2-7.6 9.6-16.6 10.5-25.7H632c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8H486.8c-2.5-3.5-5.3-6.9-8.8-9.8l-121.9-99 28.4-26.1c6.5-6 7-16.1 1-22.6s-16.1-6.9-22.6-1l-75.1 68.8c-14.4 13.1-38.6 12-51.7-2.2-13.5-14.7-12.6-37.9 2.3-51.6z"></path></svg>
                            <?php endif; ?>
                        </div>
                        <h2><?php the_sub_field('facility_name'); ?></h2>
                        <div><?php the_sub_field('facility_description'); ?></div>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
</section>