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
                        <div class="sbh_single-listing-social">
                            <h2>Social Media</h2>
                            <ul>
                                <li>
                                    <a href="#">F</a>
                                </li>
                                <li>
                                    <a href="#">T</a>
                                </li>
                                <li>
                                    <a href="#">L</a>
                                </li>                            
                            </ul>
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
