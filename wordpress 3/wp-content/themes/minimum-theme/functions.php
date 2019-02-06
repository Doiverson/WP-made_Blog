<?php
/**
 * Created by PhpStorm.
 * User: doiverson
 * Date: 2019-02-05
 * Time: 10:45
 */
?>

<?php

add_theme_support( 'menus' ); /*ナビゲーションバー追加*/
add_theme_support( 'post-thumbnails' ); /*アイキャッチ画像設定追加*/


//function wps_theme_styles() {
//    wp_enqueue_style( 'normalize_css', get_template_directory_uri().'/css/normalize.css' );
//}
//
//add_action( 'wp_enqueue_scripts', 'wps_theme_styles' );


function wps_theme_js() {
    wp_enqueue_script('loadTopMargin_js', get_template_directory_uri().'/js/loadTopMargin.js', '', '', false);
    wp_enqueue_script('resizeTopMargin_js', get_template_directory_uri().'/js/resizeTopMargin.js', '', '', false);
    wp_enqueue_script('scroll_js', get_template_directory_uri().'/js/scroll-loose.js', '', '', true);
    wp_enqueue_script('masonry_js', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array('jquery' ), '', true);
    wp_enqueue_script('imageLoaded_js', 'https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js', array('jquery', 'masonry_js' ), '', true);
    wp_enqueue_script('masonry_js', get_template_directory_uri().'/js/mansonry.js', array('masonry_js', 'imageLoaded_js'), '', true);
}

add_action( 'wp_enqueue_scripts', 'wps_theme_js' );