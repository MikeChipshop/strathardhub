<?php get_header(); ?>
    <main class="sbh_business-directory rte">
        <div class="sbh_wrap">
            <?php 
                $directoryargs = array(
                    'post_type' => 'directory',
                    'posts_per_page' => 20,
                );
                $directory_query = new WP_Query( $directoryargs ); 
            ?>
            <?php if ( $directory_query->have_posts() ) : ?>
                <h1>Directory</h1>
                <ul class="sbh_business-directory-archive-list">
                    <?php while ( $directory_query->have_posts() ) : $directory_query->the_post(); ?>      
                        <li>
                            <?php if ( has_post_thumbnail() ): ?>
                                <figure>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <?php the_post_thumbnail('listing-gallery'); ?>
                                    </a>
                                </figure>                            
                            <?php endif; ?>
                            <h2>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> 
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <a class="sbh_view-listing" href="<?php the_permalink(); ?>" title="View">View</a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </main>
<?php get_footer(); ?>
