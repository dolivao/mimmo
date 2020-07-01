<?php
/**
 * Functions and definitions
 * 
 * @package WordPress
 * @subpackage mimmo
 * @since mimmo 1.0
 */

function mimmo_setup() {
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 
        'custom-logo',
        array(
            'height' => 32,
            'width' => 234,
            'flex-width' => true,
            'flex-height' => true
        ) );

    add_theme_support( 'custom-background' );

    add_theme_support( 'wp-block-styles' );

    add_theme_support( 'align-wide' );

    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    load_theme_textdomain( 'mimmo', get_template_directory() . '/languages' );

    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'mimmo'),
            'menu-2' => esc_html__( 'Footer Menu', 'mimmo'),
            'social' => esc_html__( 'Social Links Menu', 'mimmo'),
        ));


}
add_action('after_setup_theme', 'mimmo_setup');

function mimmo_scripts_styles() {
    
    // Load Custom JavaScript functionality.
    wp_enqueue_script( 'mimmo-script', get_template_directory_uri() . '/assets/js/functions.js', array( 'jquery' ), '1.0', true );
    
    $theme_version = wp_get_theme()->get( 'Version' );
    
// Load font awesome stylesheet.
    wp_enqueue_style( 'mimmo-iconfont', get_template_directory_uri() . '/assets/css/all.css', array(), '', 'all' );
    

// Loads our main stylesheet.
	wp_enqueue_style( 'mimmo-style', get_stylesheet_uri(), array(), $theme_version );
}
add_action( 'wp_enqueue_scripts', 'mimmo_scripts_styles' );

require get_template_directory() . '/includes/template-tags.php';

// menu sidebar in navbar
/* 
function buscador_en_menu($items, $args) {
    $searchform = get_search_form( false );
    $items .= '<li>' . $searchform . '</li>'; 
    return $items; 
}

add_filter('wp_nav_menu_items','buscador_en_menu', 10, 2);
*/