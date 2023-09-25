<?php
require_once 'functions/acf.php';

add_theme_support('post-thumbnails', ['video']);
add_theme_support('menus');

function use_classic_editor() {
	add_filter('use_block_editor_for_post', '__return_false');   
}
add_action('admin_init', 'use_classic_editor');


function add_custom_assets() {
	//Header
	wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/fancybox.min.css', [], '1.0', 'all');
	wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', [], '1.0', 'all');
	wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/fonts/fonts.css', [], '1.0', 'all');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', [], '1.0', 'all');

	//Footer
	wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/fancybox.min.js', [], '1.0', true);
	wp_enqueue_script('swiper2', get_template_directory_uri() . '/assets/js/swiper.min.js', [], '1.0', true);
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [], '1.0', true);
}

add_action('wp_enqueue_scripts', 'add_custom_assets');



function image_path($image){
	return get_template_directory_uri() . "/assets/images/$image";
}

function get_placeholder_image(){
	return get_template_directory_uri() . "/assets/images/placeholder.png";
}

function limitString($string, $length) {
	$stringLength = strlen($string);
	
	if ($stringLength > $length) {

		$string = substr($string, 0, $length) . '...';

	} else if ($stringLength < $length) {

		$string = str_pad($string, $length);
	}
	
	return $string;
}