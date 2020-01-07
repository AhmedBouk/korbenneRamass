<<<<<<< HEAD
<?php
/**
 * KORBENNE RAMMAS\' functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package KORBENNE_RAMMAS\'
 */

if ( ! function_exists( 'korbenne_rammas_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function korbenne_rammas_setup() {

        load_theme_textdomain( 'korbenne-rammas', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );

    }
endif;
add_action( 'after_setup_theme', 'korbenne_rammas_setup' );

function korbenne_rammas_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'korbenne_rammas_content_width', 640 );
}
add_action( 'after_setup_theme', 'korbenne_rammas_content_width', 0 );

function korbenne_rammas_scripts() {
    wp_enqueue_style( 'korbenne-rammas-style', get_stylesheet_uri() );

        wp_register_script('mapbox', get_template_directory_uri() . '/asset/js/mapbox.js', array(), '1.0.0');
        wp_enqueue_script('mapbox');

}
add_action( 'wp_enqueue_scripts', 'korbenne_rammas_scripts' );

function themename_widgets_init()
{
    register_sidebar(array(
        'name' => __('Header Sidebar', 'theme_name'),
        'id' => 'sidebar_header',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action( 'widgets_init', 'header_sidebar' );
=======
<?php
/**
 * KORBENNE RAMMAS\' functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package KORBENNE_RAMMAS\'
 */

if ( ! function_exists( 'korbenne_rammas_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function korbenne_rammas_setup() {

        load_theme_textdomain( 'korbenne-rammas', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );

    }
endif;
add_action( 'after_setup_theme', 'korbenne_rammas_setup' );

function korbenne_rammas_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'korbenne_rammas_content_width', 640 );
}
add_action( 'after_setup_theme', 'korbenne_rammas_content_width', 0 );

function korbenne_rammas_scripts() {
    wp_enqueue_style( 'korbenne-rammas-style', get_stylesheet_uri() );

        wp_register_script('mapbox', get_template_directory_uri() . '/asset/js/mapbox.js', array(), '1.0.0');
        wp_enqueue_script('mapbox');

}
add_action( 'wp_enqueue_scripts', 'korbenne_rammas_scripts' );

>>>>>>> 81e7f5c847ee700f52bdd408ac1e1b33834947b9
