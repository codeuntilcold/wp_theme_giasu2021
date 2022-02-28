<?php 

function load_stylesheets()
{
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    
    wp_register_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), false, 'all');
    wp_enqueue_style('font-awesome');
    
    wp_register_style('animate', get_template_directory_uri() . '/lib/animate/animate.min.css', array(), false, 'all');
    wp_enqueue_style('animate');
    wp_register_style('flaticon', get_template_directory_uri() . '/lib/flaticon/font/flaticon.css', array(), false, 'all');
    wp_enqueue_style('flaticon');
    wp_register_style('owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', array(), false, 'all');
    wp_enqueue_style('owlcarousel');
    wp_register_style('lightbox', get_template_directory_uri() . '/lib/lightbox/css/lightbox.min.css', array(), false, 'all');
    wp_enqueue_style('lightbox');
    
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');

    wp_register_style('general', get_template_directory_uri() . '/assets/css/general.css', array(), false, 'all');
    wp_enqueue_style('general');
    wp_register_style('index', get_template_directory_uri() . '/assets/css/index.css', array(), false, 'all');
    wp_enqueue_style('index');
    wp_register_style('about', get_template_directory_uri() . '/assets/css/about.css', array(), false, 'all');
    wp_enqueue_style('about');
    wp_register_style('activity', get_template_directory_uri() . '/assets/css/activity.css', array(), false, 'all');
    wp_enqueue_style('activity');
    wp_register_style('contact', get_template_directory_uri() . '/assets/css/contact.css', array(), false, 'all');
    wp_enqueue_style('contact');
    wp_register_style('blog', get_template_directory_uri() . '/assets/css/blog.css', array(), false, 'all');
    wp_enqueue_style('blog');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_js()
{
    wp_register_script( 'mainjs', get_template_directory_uri() . 'assets/js/main.js', '', 1, true );
    wp_enqueue_script( 'mainjs' );

    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', '', 1, true );
    wp_enqueue_script( 'jquery' );
    wp_register_script( 'bootstrapjs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', '', 1, true );
    wp_enqueue_script( 'bootstrapjs' );
    wp_register_script( 'easingjs', get_template_directory_uri() . '/lib/easing/easing.min.js', '', 1, true );
    wp_enqueue_script( 'easingjs' );
    wp_register_script( 'wowjs', get_template_directory_uri() . '/lib/wow/wow.min.js', '', 1, true );
    wp_enqueue_script( 'wowjs' );
    wp_register_script( 'carouseljs', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', '', 1, true );
    wp_enqueue_script( 'carouseljs' );
    wp_register_script( 'isotopejs', get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js', '', 1, true );
    wp_enqueue_script( 'isotopejs' );
    wp_register_script( 'lightboxjs', get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js', '', 1, true );
    wp_enqueue_script( 'lightboxjs' );

}

add_action( 'wp_enqueue_scripts', 'load_js' );






add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array('aside', 'gallery', 'quote', 'image', 'video') );



register_nav_menus( 
    array(

        'menu' => __('Menu', 'theme'),

    )
);


add_image_size('smallest', 300, 300, true);
add_image_size( 'largest', 300, 300, true );


