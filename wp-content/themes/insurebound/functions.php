<?php
// хуки подключаем
add_action('wp_enqueue_scripts', 'insure_styles');
add_action('wp_enqueue_scripts', 'insure_scripts');

function insure_styles()
{
	// wp_enqueue_style('insure-style', get_stylesheet_uri() );



	// если подключаем CDN линки
	// wp_enqueue_style('animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
	wp_enqueue_style('swiper-style', 'https://unpkg.com/swiper/swiper-bundle.min.css');

	// если подключаем доп стилевые файлы 
	wp_enqueue_style('insure-style', get_template_directory_uri() . '/assets/styles/styles.css');
	wp_enqueue_style('fonts-style', get_template_directory_uri() . '/assets/styles/fonts.css');
};

function insure_scripts()
{

	// подключаем JS 
	wp_enqueue_script('insure-scripts', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
	wp_enqueue_script('swiper-scripts', 'https://unpkg.com/swiper/swiper-bundle.min.js');
};

// add_theme_support( 'post-thumbnails' );

// link menu 
add_action('after_setup_theme', 'theme_register_nav_menu');
function theme_register_nav_menu()
{
	register_nav_menu('primary', 'Primary Menu');
}

// add custom logo
add_theme_support('custom-logo');

// add options

if (function_exists('acf_add_options_page')) {

	acf_add_options_page();
}

// add widgets 
function wpb_widgets_init()
{

	register_sidebar(array(
		'name'          => 'Custom Footer Widget Area',
		'id'            => 'custom-footer-widget',
		'before_widget' => '<div class="footer__category">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="footer__title">',
		'after_title'   => '</h5>',
	));
}
add_action('widgets_init', 'wpb_widgets_init');
