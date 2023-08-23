<?php get_header(); ?>
    <div class="sbh23_member-dashboard">
        <?php echo get_template_part('inc/dashboard','navigation'); ?>
        <div class="sbh23_members-dashboard-content">  
            <div class="sbh23_members-dashboard-announcements">           
                <header>
                    <h2>Announcements</h2>
                </header>
                <div class="sbh23_members-dashboard-announcements-wrap">  
                    <?php 
                        $announcementargs = array(
                            'post_type' => 'announcement',
                            'posts_per_page' => 20,
                        );
                        $announcement_query = new WP_Query( $announcementargs ); 
                    ?>
                    <?php if ( $announcement_query->have_posts() ) : ?>
                        <ul>
                            <?php while ( $announcement_query->have_posts() ) : $announcement_query->the_post(); ?> 
                                <li class="sbh23_members-dashboard-announcement">
                                    <div class="sbh23_members-dashboard-announcements-cat">                                    
                                        <ul>
                                            <?php foreach ( get_the_terms( get_the_ID(), 'announcement-category' ) as $tax ): ?>
                                                <li>
                                                    <a href="<?php bloginfo('url'); ?>/announcement-category/<?php echo $tax->slug; ?>" title="<?php echo $tax->name; ?>"><?php echo $tax->name; ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <h3><?php the_title(); ?></h3>
                                    <div class="sbh23_members-dashboard-announcements-date">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="m627-287 45-45-159-160v-201h-60v225l174 181ZM480-80q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-82 31.5-155t86-127.5Q252-817 325-848.5T480-880q82 0 155 31.5t127.5 86Q817-708 848.5-635T880-480q0 82-31.5 155t-86 127.5Q708-143 635-111.5T480-80Zm0-400Zm0 340q140 0 240-100t100-240q0-140-100-240T480-820q-140 0-240 100T140-480q0 140 100 240t240 100Z"/></svg>
                                        <?php the_time('H:i - l dS F Y'); ?>
                                    </div>
                                    <div class="sbh23_members-dashboard-announcements-excerpt">
                                        <?php the_excerpt(); ?>
                                        <p><a class="read-more" href="<?php the_permalink(); ?>" title="Read More">Read more&hellip;</a></p>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php else: ?>
                        <div class="sbh_no-announcements-found">
                            <h3>No Current Announcements</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-60q142.375 0 241.188-98.812Q820-337.625 820-480q0-60.662-21-116.831Q778-653 740-699L261-220q45 39 101.493 59.5Q418.987-140 480-140ZM221-261l478-478q-46-39-102.169-60T480-820q-142.375 0-241.188 98.812Q140-622.375 140-480q0 61.013 22 117.507Q184-306 221-261Z"/></svg>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>