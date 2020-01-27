<?php

function bsd_setup() {
    add_editor_style('css/editor-style.css');
    add_theme_support('post-thumbnails');
    update_option('thumbnail_size_w', 170);
    update_option('medium_size_w', 470);
    update_option('large_size_w', 970);
}
add_action('init', 'bsd_setup');

if (! isset($content_width))
	$content_width = 600;

function bsd_excerpt_readmore() {
    return '&nbsp; <a href="'. get_permalink() . '">' . '&hellip; ' . __('Read more', 'bsd') . ' <i class="glyphicon glyphicon-arrow-right"></i>' . '</a></p>';
}
add_filter('excerpt_more', 'bsd_excerpt_readmore');

function bsd_browser_body_class( $classes ) {
	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;
	
	if($is_lynx) $classes[] = 'lynx';
	elseif($is_gecko) $classes[] = 'gecko';
	elseif($is_opera) $classes[] = 'opera';
	elseif($is_NS4) $classes[] = 'ns4';
	elseif($is_safari) $classes[] = 'safari';
	elseif($is_chrome) $classes[] = 'chrome';
	elseif($is_IE) {
		$browser = $_SERVER['HTTP_USER_AGENT'];
		$browser = substr( "$browser", 25, 8);
		if ($browser == "MSIE 7.0"  ) {
			$classes[] = 'ie7';
			$classes[] = 'ie';
		} elseif ($browser == "MSIE 6.0" ) {
			$classes[] = 'ie6';
			$classes[] = 'ie';
		} elseif ($browser == "MSIE 8.0" ) {
			$classes[] = 'ie8';
			$classes[] = 'ie';
		} elseif ($browser == "MSIE 9.0" ) {
			$classes[] = 'ie9';
			$classes[] = 'ie';
		} else {
            $classes[] = 'ie';
        }
	}
	else $classes[] = 'unknown';
 
	if( $is_iphone ) $classes[] = 'iphone';
 
	return $classes;
}
add_filter( 'body_class', 'bsd_browser_body_class' );

// Add post formats support. See http://codex.wordpress.org/Post_Formats

add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

// Bootstrap pagination

if ( ! function_exists( 'bsd_pagination' ) ) {
	function bsd_pagination() {
		global $wp_query;
		$big = 999999999; // This needs to be an unlikely integer
		// For more options and info view the docs for paginate_links()
		// http://codex.wordpress.org/Function_Reference/paginate_links
		$paginate_links = paginate_links( array(
			'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'mid_size' => 5,
			'prev_next' => True,
			'prev_text' => __('<i class="glyphicon glyphicon-chevron-left"></i> Newer'),
			'next_text' => __('Older <i class="glyphicon glyphicon-chevron-right"></i>'),
			'type' => 'list'
		) );
		$paginate_links = str_replace( "<ul class='page-numbers'>", "<ul class='pagination'>", $paginate_links );
		$paginate_links = str_replace( "<li><span class='page-numbers current'>", "<li class='active'><a href='#'>", $paginate_links );
		$paginate_links = str_replace( "</span>", "</a>", $paginate_links );
		$paginate_links = preg_replace( "/\s*page-numbers/", "", $paginate_links );
		// Display the pagination if more than one page is found
		if ( $paginate_links ) {
			echo $paginate_links;
		}
	}
}

remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );
function twentyten_remove_recent_comments_style() {  
        global $wp_widget_factory;  
        remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );  
    }  
add_action( 'widgets_init', 'twentyten_remove_recent_comments_style' );
remove_action('wp_footer', 'wp-fastest-cache');


add_action( 'wp_print_styles', 'wps_deregister_styles', 100 ); function wps_deregister_styles() { wp_deregister_style( 'contact-form-7' ); } 
// Register Custom Post Type
function service_areas() {

	$labels = array(
		'name'                  => _x( 'Service Areas', 'Post Type General Name', 'service_areas' ),
		'singular_name'         => _x( 'Service Area', 'Post Type Singular Name', 'service_areas' ),
		'menu_name'             => __( 'Service Areas', 'service_areas' ),
		'name_admin_bar'        => __( 'Service Area', 'service_areas' ),
		'archives'              => __( 'Service Area Archives', 'service-areas' ),
		'attributes'            => __( 'Service Area Attributes', 'service_areas' ),
		'parent_item_colon'     => __( 'Parent Item:', 'service_areas' ),
		'all_items'             => __( 'All Service Areas', 'service_areas' ),
		'add_new_item'          => __( 'Add New Service Area', 'service_areas' ),
		'add_new'               => __( 'Add New', 'service_areas' ),
		'new_item'              => __( 'New Service Area', 'service_areas' ),
		'edit_item'             => __( 'Edit Service Area', 'service_areas' ),
		'update_item'           => __( 'Update Service Area', 'service_areas' ),
		'view_item'             => __( 'View Service Area', 'service_areas' ),
		'view_items'            => __( 'View Service Areas', 'service_areas' ),
		'search_items'          => __( 'Search Service Area', 'service_areas' ),
		'not_found'             => __( 'Not found', 'service_areas' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'service_areas' ),
		'featured_image'        => __( 'Featured Image', 'service_areas' ),
		'set_featured_image'    => __( 'Set featured image', 'service_areas' ),
		'remove_featured_image' => __( 'Remove featured image', 'service_areas' ),
		'use_featured_image'    => __( 'Use as featured image', 'service_areas' ),
		'insert_into_item'      => __( 'Insert into Service Area', 'service_areas' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service Area', 'service_areas' ),
		'items_list'            => __( 'Service Areas list', 'service_areas' ),
		'items_list_navigation' => __( 'Service Areas list navigation', 'service_areas' ),
		'filter_items_list'     => __( 'Filter Service Areas list', 'service_areas' ),
	);
	$args = array(
		'label'                 => __( 'Service Area', 'service_areas' ),
		'description'           => __( 'Service Area Pages', 'service_areas' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'service_areas', $args );

}
add_action( 'init', 'service_areas', 0 );

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}