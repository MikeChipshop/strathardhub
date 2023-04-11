<?php get_header(); ?>
    <div class="sbh_wrap">
        <div class="sbh_list-now">
            <a href="#">List your business now</a>
        </div>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('sbh_single-listing'); ?>>
                    <aside>
                        <?php if ( has_post_thumbnail() ): ?>
                            <figure>
                                <?php the_post_thumbnail(); ?>
                            </figure>                            
                        <?php endif; ?>                        
                        <div class="sbh_single-listing-meta location">
                            <h2>Location</h2>
                            <ul>
                                <li>
                                    <strong>Address:</strong><br />
                                    1st Floor, Trossachs Discovery Centre<br />
                                    Main Street<br />
                                    Aberfoyle<br />
                                    FK8 3UQ
                                </li>
                                <li>
                                    <strong>What3Words: </strong> <a href="#">swatting.contrived.perused</a>
                                    
                                </li>
                            </ul>
                            <div class="sbh_single-listing-meta location">
                                <img src="#">
                            </div>
                        </div>
                        <div class="sbh_single-listing-meta contact">
                            <h2>Contact</h2>
                            <ul>
                                <li>
                                    <strong>Email: </strong><a href="mailto:hello@strathardhub.com">hello@strathardhub.com</a>
                                </li>
                                <li>
                                    <strong>Phone: </strong> <a href="tel:1234567890">07645 345 657</a>                                    
                                </li>
                            </ul>
                        </div>
                        <div class="sbh_single-listing-social sbh_single-listing-meta">
                            <h2>Social Media</h2>
                            <?php if( have_rows('directory_business_social_media') ): ?>
                                <ul>                                
                                    <?php while( have_rows('directory_business_social_media') ) : the_row(); ?>
                                        <li>
                                            <?php if(get_sub_field('directory_business_social_media_type') === 'facebook'): ?>
                                                <a href="<?php the_sub_field('directory_business_social_media_url'); ?>" title="<?php the_title(); ?> <?php the_sub_field('directory_business_social_media_type'); ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                                                </a>
                                            <?php elseif(get_sub_field('directory_business_social_media_type') === 'instagram'): ?>
                                                <a href="<?php the_sub_field('directory_business_social_media_url'); ?>" title="<?php the_title(); ?> <?php the_sub_field('directory_business_social_media_type'); ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                                                </a>
                                            <?php elseif(get_sub_field('directory_business_social_media_type') === 'twitter'): ?>
                                                <a href="<?php the_sub_field('directory_business_social_media_url'); ?>" title="<?php the_title(); ?> <?php the_sub_field('directory_business_social_media_type'); ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                                                </a>
                                            <?php elseif(get_sub_field('directory_business_social_media_type') === 'tiktok'): ?>
                                                <a href="<?php the_sub_field('directory_business_social_media_url'); ?>" title="<?php the_title(); ?> <?php the_sub_field('directory_business_social_media_type'); ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg>
                                                </a>
                                            <?php elseif(get_sub_field('directory_business_social_media_type') === 'youtube'): ?>
                                                <a href="<?php the_sub_field('directory_business_social_media_url'); ?>" title="<?php the_title(); ?> <?php the_sub_field('directory_business_social_media_type'); ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
                                                </a>
                                            <?php elseif(get_sub_field('directory_business_social_media_type') === 'pinterest'): ?>
                                                <a href="<?php the_sub_field('directory_business_social_media_url'); ?>" title="<?php the_title(); ?> <?php the_sub_field('directory_business_social_media_type'); ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"/></svg>
                                                </a>
                                            <?php elseif(get_sub_field('directory_business_social_media_type') === 'flickr'): ?>
                                                <a href="<?php the_sub_field('directory_business_social_media_url'); ?>" title="<?php the_title(); ?> <?php the_sub_field('directory_business_social_media_type'); ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM144.5 319c-35.1 0-63.5-28.4-63.5-63.5s28.4-63.5 63.5-63.5 63.5 28.4 63.5 63.5-28.4 63.5-63.5 63.5zm159 0c-35.1 0-63.5-28.4-63.5-63.5s28.4-63.5 63.5-63.5 63.5 28.4 63.5 63.5-28.4 63.5-63.5 63.5z"/></svg>
                                                </a>
                                            <?php elseif(get_sub_field('directory_business_social_media_type') === 'linkedin'): ?>
                                                <a href="<?php the_sub_field('directory_business_social_media_url'); ?>" title="<?php the_title(); ?> <?php the_sub_field('directory_business_social_media_type'); ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
                                                </a>
                                            <?php elseif(get_sub_field('directory_business_social_media_type') === 'airbnb'): ?>
                                                <a href="<?php the_sub_field('directory_business_social_media_url'); ?>" title="<?php the_title(); ?> <?php the_sub_field('directory_business_social_media_type'); ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 373.12c-25.24-31.67-40.08-59.43-45-83.18-22.55-88 112.61-88 90.06 0-5.45 24.25-20.29 52-45 83.18zm138.15 73.23c-42.06 18.31-83.67-10.88-119.3-50.47 103.9-130.07 46.11-200-18.85-200-54.92 0-85.16 46.51-73.28 100.5 6.93 29.19 25.23 62.39 54.43 99.5-32.53 36.05-60.55 52.69-85.15 54.92-50 7.43-89.11-41.06-71.3-91.09 15.1-39.16 111.72-231.18 115.87-241.56 15.75-30.07 25.56-57.4 59.38-57.4 32.34 0 43.4 25.94 60.37 59.87 36 70.62 89.35 177.48 114.84 239.09 13.17 33.07-1.37 71.29-37.01 86.64zm47-136.12C280.27 35.93 273.13 32 224 32c-45.52 0-64.87 31.67-84.66 72.79C33.18 317.1 22.89 347.19 22 349.81-3.22 419.14 48.74 480 111.63 480c21.71 0 60.61-6.06 112.37-62.4 58.68 63.78 101.26 62.4 112.37 62.4 62.89.05 114.85-60.86 89.61-130.19.02-3.89-16.82-38.9-16.82-39.58z"/></svg>
                                                </a>
                                            <?php else: ?>
                                                <a href="<?php the_sub_field('directory_business_social_media_url'); ?>" title="<?php the_title(); ?> <?php the_sub_field('directory_business_social_media_type'); ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm193.2 152h-82.5c-9-44.4-24.1-82.2-43.2-109.1 55 18.2 100.2 57.9 125.7 109.1zM336 256c0 22.9-1.6 44.2-4.3 64H164.3c-2.7-19.8-4.3-41.1-4.3-64s1.6-44.2 4.3-64h167.4c2.7 19.8 4.3 41.1 4.3 64zM248 40c26.9 0 61.4 44.1 78.1 120H169.9C186.6 84.1 221.1 40 248 40zm-67.5 10.9c-19 26.8-34.2 64.6-43.2 109.1H54.8c25.5-51.2 70.7-90.9 125.7-109.1zM32 256c0-22.3 3.4-43.8 9.7-64h90.5c-2.6 20.5-4.2 41.8-4.2 64s1.5 43.5 4.2 64H41.7c-6.3-20.2-9.7-41.7-9.7-64zm22.8 96h82.5c9 44.4 24.1 82.2 43.2 109.1-55-18.2-100.2-57.9-125.7-109.1zM248 472c-26.9 0-61.4-44.1-78.1-120h156.2c-16.7 75.9-51.2 120-78.1 120zm67.5-10.9c19-26.8 34.2-64.6 43.2-109.1h82.5c-25.5 51.2-70.7 90.9-125.7 109.1zM363.8 320c2.6-20.5 4.2-41.8 4.2-64s-1.5-43.5-4.2-64h90.5c6.3 20.2 9.7 41.7 9.7 64s-3.4 43.8-9.7 64h-90.5z"/></svg>
                                                </a>
                                            <?php endif; ?>                    
                                        </li>       
                                    <?php endwhile; ?>     
                                </ul>
                            <?php endif; ?>
                        </div>
                    </aside>
                    <main>
                        <div class="sbh_single-listing-content">
                            <h1><?php the_title(); ?></h1>
                            <div class="sbh_single-listing-description rte">
                                <?php the_content(); ?>
                            </div>
                            <?php if(get_field('directory_listing_gallery')): ?>
                                <div class="sbh_single-listing-gallery">
                                    <?php 
                                        $galleryimages = get_field('directory_listing_gallery');
                                        $gallerysize = 'listing-gallery';
                                        $fullgallerysize = 'full';
                                    ?>
                                    <?php if( $galleryimages ): ?>
                                        <ul>
                                            <?php foreach( $galleryimages as $image_id ): ?>
                                                <li>
                                                    <a href="<?php echo wp_get_attachment_image_url( $image_id, $fullgallerysize ); ?>" alt="Gallery Image" target="_blank">
                                                        <?php echo wp_get_attachment_image( $image_id, $gallerysize ); ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </main>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <h1>No content</h1>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>
