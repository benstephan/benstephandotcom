<?php

function wbst_enqueues() {

	wp_register_style('app-css', get_template_directory_uri() . '/assets/css/app.css', false, '3.3.4', null);
	wp_enqueue_style('app-css');

	wp_register_script('script', get_template_directory_uri() . '/assets/js/script.js', false, null, true);
	wp_enqueue_script('script');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'wbst_enqueues', 100);
