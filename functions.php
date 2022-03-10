<?php

if ( ! function_exists( 'twentynineteen_setup' ) ) :
    function twentynineteen_setup() {
        // Add support for Block Styles
		add_theme_support( 'wp-block-styles' );
		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );
		// Add support for editor styles
		add_theme_support( 'editor-styles' );
		// Enqueue editor styles
		add_editor_style( 'style-editor.css' );
    }
endif;


function sbh_guten_block_editor_assets() {
	wp_enqueue_style('sbh-editor-style', get_stylesheet_directory_uri() . "/style-editor.css", array(),	'1.0');
    wp_enqueue_style( 'sbh-font-css', 'https://fonts.googleapis.com/css?family=Roboto:400,500|Work+Sans:600','','', 'screen' );

}
add_action('enqueue_block_editor_assets', 'sbh_guten_block_editor_assets');

/***************************************************
/ Add Featured Thumbs
/***************************************************/
if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );


/***************************************************
/ Image Sizes
/***************************************************/

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'home-slide', 1400, 400, false );
	add_image_size( 'testimonial', 150, 150, false );
}

/****************************************************
ENQUEUES
*****************************************************/
function les_load_scripts() {

    wp_register_script( 'site-common', get_template_directory_uri() . '/js/site-common.js', array('jquery'),'null',true  );
    wp_register_script( 'lightslider', get_template_directory_uri() . '/js/lightslider.min.js', array('jquery'),time(),true  );

    wp_register_style( 'font-css', 'https://fonts.googleapis.com/css?family=Roboto:400,500|Work+Sans:600','','', 'screen' );
    wp_register_style( 'main-css', get_template_directory_uri() . '/style.css','',time(), 'screen' );
    wp_register_style( 'lightslider-css', get_template_directory_uri() . '/css/lightslider.min.css','','', 'screen' );

    wp_enqueue_script( 'site-common' );
    wp_enqueue_script( 'lightslider' );

	wp_enqueue_style( 'font-css' );
    wp_enqueue_style( 'main-css' );
    wp_enqueue_style( 'lightslider-css' );
}

add_action('wp_enqueue_scripts', 'les_load_scripts');

function sbh_block_styles() {
	wp_enqueue_style( 'prox-ed', 'https://fonts.googleapis.com/css?family=Roboto:400,500|Work+Sans:600','','', 'screen' );
	wp_enqueue_style( 'acf-font', get_template_directory_uri() . '/css/acf-styles.css');
}
add_action( 'enqueue_block_editor_assets', 'sbh_block_styles' );


/****************************************************
EXCERPTS
*****************************************************/

function cust_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'cust_excerpt_length');

function twentyeleven_continue_reading_link() {
	return ' <a class="read-more" href="'. esc_url( get_permalink() ) . '">' . __( 'read more &raquo;', 'twentyeleven' ) . '</a>';
}

function twentyeleven_auto_excerpt_more( $more ) {
	return '&hellip;' . twentyeleven_continue_reading_link();
}
add_filter( 'excerpt_more', 'twentyeleven_auto_excerpt_more' );


/****************************************************
GALLERIES
*****************************************************/

/* Remove inline styles printed when the gallery shortcode is used. */
function twentyten_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
add_filter( 'gallery_style', 'twentyten_remove_gallery_css' );

/****************************************************
COMMENTS
*****************************************************/

if ( ! function_exists( 'twentyten_comment' ) ) :

	function twentyten_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' : ?>
			<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
				<div id="comment-<?php comment_ID(); ?>">
					<div class="comment-author vcard">
						<?php echo get_avatar( $comment, 40 ); ?>
						<?php printf( __( '%s <span class="says">says:</span>', 'twentyten' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
					</div>
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<em><?php _e( 'Your comment is awaiting moderation.', 'twentyten' ); ?></em><br />
					<?php endif; ?>
					<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
						<?php printf( __( '%1$s at %2$s', 'twentyten' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)', 'twentyten' ), ' ' ); ?>
					</div>
					<div class="comment-body"><?php comment_text(); ?></div>
					<div class="reply">
						<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
					</div>
				</div>
		<?php break;
			case 'pingback'  :
			case 'trackback' :
		?>
		<li class="post pingback">
			<p>
				<?php _e( 'Pingback:', 'twentyten' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'twentyten'), ' ' ); ?>
			</p>
		<?php break;
			endswitch;
		?>
		<?php
	}
endif;


/****************************************************
Remove Pre-packaged 'Recent Comment' Widget Styles
*****************************************************/
function twentyten_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'twentyten_remove_recent_comments_style' );

if ( ! function_exists( 'twentyten_posted_on' ) ) :

function twentyten_posted_on() {
	printf( __( '<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s', 'twentyten' ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'twentyten' ), get_the_author() ),
			get_the_author()
		)
	);
}
endif;

if ( ! function_exists( 'twentyten_posted_in' ) ) :
function twentyten_posted_in() {
	$tag_list = get_the_tag_list( '', ', ' );
	if ( $tag_list ) {
		$posted_in = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );
	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );
	} else {
		$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyten' );
	}
	printf(
		$posted_in,
		get_the_category_list( ', ' ),
		$tag_list,
		get_permalink(),
		the_title_attribute( 'echo=0' )
	);
}
endif;



/***************************************************
/ HTML5 Placeholders for Comments Form
/***************************************************/

function my_update_fields($fields) {

	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$fields['author'] =
		'<p class="comment-form-author">
			<input required minlength="3" maxlength="30" placeholder="Your Name*" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
    '" size="30"' . $aria_req . ' />
    	</p>';

    $fields['email'] =
    	'<p class="comment-form-email">
    		<input required placeholder="Your Email*" id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) .
    '" size="30"' . $aria_req . ' />
    	</p>';

	$fields['url'] =
		'<p class="comment-form-url">
			<input placeholder="Your URL" id="url" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) .
    '" size="30" />
    	</p>';

	return $fields;
}
add_filter('comment_form_default_fields','my_update_fields');

function my_update_comment_field($comment_field) {

	$comment_field =
		'<p class="comment-form-comment">
			<textarea required placeholder="Enter Your Comment…" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
		</p>';

	return $comment_field;
}
add_filter('comment_form_field_comment','my_update_comment_field');




/***************************************************
/ Related Posts (Matches by tags)
/***************************************************/

function joints_related_posts() {
    global $post;
    $tags = wp_get_post_tags( $post->ID );
    if($tags) {
        foreach( $tags as $tag ) {
            $tag_arr .= $tag->slug . ',';
        }
        $args = array(
            'tag' => $tag_arr,
            'numberposts' => 3,
            'post__not_in' => array($post->ID)
        );
        $related_posts = get_posts( $args );

		if($related_posts) {
        	echo '<h4>Related Posts</h4>';
        	echo '<ul id="joints-related-posts">';
			foreach ( $related_posts as $post ) : setup_postdata( $post );
				?>
					<li class="related_post">
						<a class="entry-unrelated" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
						<?php get_template_part( 'partials/content', 'byline' ); ?>
					</li>
				<?php
			endforeach;
			echo '</ul>';
		}
    }
    wp_reset_postdata();
}

/***************************************************
/ Remove Auto <p>
/***************************************************/

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');

/***************************************************
/ Comment Form
/***************************************************/

add_filter( 'get_comment_author_link', 'pb18_remove_comment_author_link', 10, 3 );
function pb18_remove_comment_author_link( $return, $author, $comment_ID ) {
	return $author;
}

add_filter( 'comment_form_defaults', 'rich_text_comment_form' );
function rich_text_comment_form( $args ) {
	ob_start();
	wp_editor( '', 'comment', array(
		'media_buttons' => true, // show insert/upload button(s) to users with permission
		'textarea_rows' => '10', // re-size text area
		'dfw' => false, // replace the default full screen with DFW (WordPress 3.4+)
		'tinymce' => array(
        	'theme_advanced_buttons1' => 'bold,italic,underline,strikethrough,bullist,numlist,code,blockquote,link,unlink,outdent,indent,|,undo,redo,fullscreen',
	        'theme_advanced_buttons2' => '', // 2nd row, if needed
        	'theme_advanced_buttons3' => '', // 3rd row, if needed
        	'theme_advanced_buttons4' => '' // 4th row, if needed
  	  	),
		'quicktags' => array(
 	       'buttons' => 'strong,em,link,block,del,ins,img,ul,ol,li,code,close'
	    )
	) );
	$args['comment_field'] = ob_get_clean();
	return $args;
}

add_filter( 'comment_reply_link', '__THEME_PREFIX__comment_reply_link' );
function __THEME_PREFIX__comment_reply_link($link) {
    return str_replace( 'onclick=', 'data-onclick=', $link );
}

add_action( 'wp_head', '__THEME_PREFIX__wp_head' );
function __THEME_PREFIX__wp_head() {
?>
<script type="text/javascript">
    jQuery(function($){
        $('.comment-reply-link').click(function(e){
            e.preventDefault();
            var args = $(this).data('onclick');
            args = args.replace(/.*\(|\)/gi, '').replace(/\"|\s+/g, '');
            args = args.split(',');
            tinymce.EditorManager.execCommand('mceRemoveControl', true, 'comment');
            addComment.moveForm.apply( addComment, args );
            tinymce.EditorManager.execCommand('mceAddControl', true, 'comment');
        });
    });
</script>
<?php
}

/***************************************************
/ Article List Widget
/***************************************************/

function pb18_article_also_widget() {
    register_widget( 'pb18_article_also_widget' );
}

add_action( 'widgets_init', 'pb18_article_also_widget' );

class pb18_article_also_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'pb18_article_also_widget',
			__('You may also like (articles)', 'pb18_article_also_widget_domain'),
			array( 'description' => __( 'Display list of articles of potential interest', 'pb18_article_also_widget_domain' ), )
		);
	}

	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		echo $args['before_widget'];
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];
		$alsoargs = array(
			'post_type' => array('reviews', 'posts', 'news'),
			'posts_per_page' => 5,
			'orderby' => 'rand'
		);

		$alsoloop = new WP_Query( $alsoargs ); if ( $alsoloop->have_posts() ): ?>
			<ul>
				<?php while ( $alsoloop->have_posts() ) : $alsoloop->the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<div class="pb18_also-like-image">
								<?php
									if(get_field('square_image')):
										$thumb_id = get_field('square_image');
									else:
										$thumb_id = get_post_thumbnail_id();
									endif;
									$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'square', true);
									$thumb_url = $thumb_url_array[0];

								?>
								<img src="<?php echo $thumb_url ?>" width="50px" height="50px">
							</div>
							<div class="pb18_also-like-content">
								<h2><?php the_title(); ?></h2>
							</div>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif;
	}

	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		} else {
			$title = __( 'You may also like', 'pb18_article_also_widget_domain' );
		}

		?>
			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
			</p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
}

/***************************************************
/ Testimonails Post Type
/***************************************************/

add_action( 'init', 'register_cpt_testimonial' );

function register_cpt_testimonial() {

    $labels = array(
        'name' => _x( 'Testimonials', 'testimonial' ),
        'singular_name' => _x( 'Testimonial', 'testimonial' ),
        'add_new' => _x( 'Add New', 'testimonial' ),
        'add_new_item' => _x( 'Add New', 'testimonial' ),
        'edit_item' => _x( 'Edit', 'testimonial' ),
        'new_item' => _x( 'New', 'testimonial' ),
        'view_item' => _x( 'View', 'testimonial' ),
        'search_items' => _x( 'Search', 'testimonial' ),
        'not_found' => _x( 'None found', 'testimonial' ),
        'not_found_in_trash' => _x( 'None found in bin', 'testimonial' ),
        'parent_item_colon' => _x( 'Parent:', 'testimonial' ),
        'menu_name' => _x( 'Testimonials', 'testimonial' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Post type for testimonials',
        'supports' => array( 'title', 'thumbnail', 'revisions' ),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
		'menu_icon' => 'dashicons-megaphone',
        'capability_type' => 'post'
    );

    register_post_type( 'testimonial', $args );
}

/***************************************************
/ Facilities Post Type
/***************************************************/

add_action( 'init', 'register_cpt_facility' );

function register_cpt_facility() {

    $labels = array(
        'name' => _x( 'Facilities', 'facility' ),
        'singular_name' => _x( 'Facility', 'facility' ),
        'add_new' => _x( 'Add New', 'facility' ),
        'add_new_item' => _x( 'Add New', 'facility' ),
        'edit_item' => _x( 'Edit', 'facility' ),
        'new_item' => _x( 'New', 'facility' ),
        'view_item' => _x( 'View', 'facility' ),
        'search_items' => _x( 'Search', 'facility' ),
        'not_found' => _x( 'None found', 'facility' ),
        'not_found_in_trash' => _x( 'None found in bin', 'facility' ),
        'parent_item_colon' => _x( 'Parent:', 'facility' ),
        'menu_name' => _x( 'Facilities', 'facility' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Post type for facilities',
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
		'menu_icon' => 'dashicons-clipboard',
		'capability_type' => 'post',
		'show_in_rest' => true
    );

    register_post_type( 'facility', $args );
}

/***************************************************
/ Events Post Type
/***************************************************/

add_action( 'init', 'register_cpt_events' );

function register_cpt_events() {

    $labels = array(
        'name' => _x( 'Events', 'events' ),
        'singular_name' => _x( 'Event', 'events' ),
        'add_new' => _x( 'Add New', 'events' ),
        'add_new_item' => _x( 'Add New', 'events' ),
        'edit_item' => _x( 'Edit', 'events' ),
        'new_item' => _x( 'New', 'events' ),
        'view_item' => _x( 'View', 'events' ),
        'search_items' => _x( 'Search', 'events' ),
        'not_found' => _x( 'None found', 'events' ),
        'not_found_in_trash' => _x( 'None found in bin', 'events' ),
        'parent_item_colon' => _x( 'Parent:', 'facileventsity' ),
        'menu_name' => _x( 'Events', 'events' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Post type for events',
        'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'taxonomies' => array(),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
		'menu_icon' => 'dashicons-clipboard',
		'capability_type' => 'post',
		'show_in_rest' => true
    );

    register_post_type( 'events', $args );
}

/***************************************************
/ ACF Blocks
/***************************************************/

function sbh_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'sbh',
				'title' => __( 'Business Hub', 'sbh' ),
			),
		)
	);
}
add_filter( 'block_categories', 'sbh_block_category', 10, 2);


function register_acf_block_types() {

	// Typographic Display
	acf_register_block_type(array(
        'name'              => 'sbh_type',
        'title'             => __('Type'),
		'description'       => __('A custom type block for SBH.'),
		'mode'			=> 'preview',
		'render_template'   => 'blocks/type/type.php',
		'enqueue_style' => get_template_directory_uri() . '/blocks/type/type.css',
		'enqueue_script' => get_template_directory_uri() . '/blocks/type/type.js',
        'category'          => 'sbh',
        'icon'              => 'editor-textcolor',
		'keywords'          => array( 'layout', 'SBH', 'custom' ),
		'supports' => array( 
			'align' => false,
			'jsx' 	=> true,
		 ),
	));	

	// Testimonials
	acf_register_block_type(array(
        'name'              => 'sbh_testimonials',
        'title'             => __('Testimonials'),
		'description'       => __('A custom type block for testimonials.'),
		'mode'			=> 'preview',
		'render_template'   => 'blocks/testimonials/testimonials.php',
		'enqueue_style' => get_template_directory_uri() . '/blocks/testimonials/testimonials.css',
		'enqueue_script' => get_template_directory_uri() . '/blocks/testimonials/testimonials.js',
        'category'          => 'sbh',
        'icon'              => 'format-status',
		'keywords'          => array( 'layout', 'SBH', 'testimonials' ),
		'supports' => array( 
			'align' => false,
			'jsx' 	=> true,
			'multiple' => false,
		 ),
	));	

	// Facilities
	acf_register_block_type(array(
        'name'              => 'sbh_facilities',
        'title'             => __('Facilities'),
		'description'       => __('A custom type block for facilities.'),
		'mode'			=> 'preview',
		'render_template'   => 'blocks/facilities/facilities.php',
		'enqueue_style' => get_template_directory_uri() . '/blocks/facilities/facilities.css',
		'enqueue_script' => get_template_directory_uri() . '/blocks/facilities/facilities.js',
        'category'          => 'sbh',
        'icon'              => 'clipboard',
		'keywords'          => array( 'layout', 'SBH', 'facilities' ),
		'supports' => array( 
			'align' => false,
			'jsx' 	=> true,
		 ),
	));	

	// Two Column
	acf_register_block_type(array(
        'name'              => 'sbh_two-column',
        'title'             => __('Two Columns'),
		'description'       => __('A custom Two Column block.'),
		'mode'			=> 'preview',
		'render_template'   => 'blocks/two-column/two-column.php',
		'enqueue_style' => get_template_directory_uri() . '/blocks/two-column/two-column.css',
		'enqueue_script' => get_template_directory_uri() . '/blocks/two-column/two-column.js',
        'category'          => 'sbh',
        'icon'              => 'columns',
		'keywords'          => array( 'layout', 'SBH', 'two-column', 'Two Column' ),
		'supports' => array( 
			'align' => false,
			'jsx' 	=> true,
		 ),
	));	

	// Hero
	acf_register_block_type(array(
        'name'              => 'sbh_hero',
        'title'             => __('Hero'),
		'description'       => __('A custom Hero block.'),
		'mode'			=> 'preview',
		'render_template'   => 'blocks/hero/hero.php',
		'enqueue_style' => get_template_directory_uri() . '/blocks/hero/hero.css',
		'enqueue_script' => get_template_directory_uri() . '/blocks/hero/hero.js',
        'category'          => 'sbh',
        'icon'              => 'superhero-alt',
		'keywords'          => array( 'layout', 'SBH','Hero' ),
		'supports' => array( 
			'align' => false,
			'jsx' 	=> true,
		 ),
	));	

	// Contact
	acf_register_block_type(array(
        'name'              => 'sbh_contact',
        'title'             => __('Contact'),
		'description'       => __('A custom contact block.'),
		'mode'			=> 'preview',
		'render_template'   => 'blocks/contact/contact.php',
		'enqueue_style' => get_template_directory_uri() . '/blocks/contact/contact.css',
		'enqueue_script' => get_template_directory_uri() . '/blocks/contact/contact.js',
        'category'          => 'sbh',
        'icon'              => 'email-alt',
		'keywords'          => array( 'layout', 'SBH','contact' ),
		'supports' => array( 
			'align' => false,
			'jsx' 	=> true,
		 ),
	));	

	// Booking
	acf_register_block_type(array(
        'name'              => 'sbh_booking',
        'title'             => __('Booking'),
		'description'       => __('A custom booking block.'),
		'mode'			=> 'preview',
		'render_template'   => 'blocks/booking/booking.php',
		'enqueue_style' => get_template_directory_uri() . '/blocks/booking/booking.css',
        'category'          => 'sbh',
        'icon'              => 'calendar-alt',
		'keywords'          => array( 'layout', 'SBH','booking' ),
		'supports' => array( 
			'align' => false,
			'jsx' 	=> true,
		 ),
	));	
}

if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}

add_filter( 'big_image_size_threshold', '__return_false' );

add_theme_support('editor-styles');
add_editor_style( 'editor-style.css' );

if(function_exists('acf_add_options_page')) {
	acf_add_options_page();
}