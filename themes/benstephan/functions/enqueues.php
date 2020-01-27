<?php

function wbst_enqueues() {

	wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.11.3.min.js', __FILE__, false, '1.11.3', true);
	wp_enqueue_script( 'jquery' );

	wp_register_style('app-css', get_template_directory_uri() . '/css/app.css', false, '3.3.4', null);
	wp_enqueue_style('app-css');

  	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js', false, null, false);
	wp_enqueue_script('modernizr');

	wp_register_script('script', get_template_directory_uri() . '/js/script.js', false, null, true);
	wp_enqueue_script('script');
	
	wp_deregister_script( 'contact-form-7' );

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'wbst_enqueues', 100);
