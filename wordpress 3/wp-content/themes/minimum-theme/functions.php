<?php
/**
 * Created by PhpStorm.
 * User: doiverson
 * Date: 2019-02-05
 * Time: 10:45
 */
?>

<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function register_theme_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' )
        )
    );
}
add_action( 'init', 'register_theme_menus' );


function wpt_excerpt_length() {
    return 10;
}
add_filter( 'excerpt_length', 'wpt_excerpt_length', 999 );

function new_excerpt_more() {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function wps_theme_styles() {
    wp_enqueue_style( 'normalize_css', get_template_directory_uri().'/css/normalize.css' );
    wp_enqueue_style( 'style_css', get_template_directory_uri().'/style.css' );
}

add_action( 'wp_enqueue_scripts', 'wps_theme_styles' );


function wps_theme_js() {
    wp_enqueue_script('loadTopMargin_js', get_template_directory_uri().'/js/loadTopMargin.js', '', '', false);
    wp_enqueue_script('resizeTopMargin_js', get_template_directory_uri().'/js/resizeTopMargin.js', '', '', false);
    wp_enqueue_script('masonryPlugin_js', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', '', '', true);
    wp_enqueue_script('imageLoaded_js', 'https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js', '', '', true);
    wp_enqueue_script('masonry_js', get_template_directory_uri().'/js/mansonry.js', array('jquery'), '', true);
    wp_enqueue_script('scroll_js', get_template_directory_uri().'/js/scroll-loose.js', '', '', true);
}

add_action( 'wp_enqueue_scripts', 'wps_theme_js' );