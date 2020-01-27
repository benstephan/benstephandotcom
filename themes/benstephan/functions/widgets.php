<?php

function bsd_widgets_init() {

  	/*
    Sidebar (one widget area)
     */
    register_sidebar( array(
        'name' => __( 'Sidebar', 'bsd' ),
        'id' => 'sidebar-widget-area',
        'description' => __( 'The sidebar widget area', 'bsd' ),
        'before_widget' => '<section class="%1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );

  	/*
    Footer (three widget areas)
     */
    register_sidebar( array(
        'name' => __( 'Footer', 'bsd' ),
        'id' => 'footer-widget-area',
        'description' => __( 'The footer widget area', 'bsd' ),
        'before_widget' => '<div class="%1$s %2$s col-sm-4">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );

}
add_action( 'widgets_init', 'bsd_widgets_init' );
