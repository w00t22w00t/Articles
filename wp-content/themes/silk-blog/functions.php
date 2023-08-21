<?php

/**
 * Silk Blog functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package Silk Blog
 * @since Silk Blog 1.0
 */
define('SILKBLOG_VERSION', '1.0.1');

define('SILKBLOG_PHP_INCLUDE', trailingslashit(get_template_directory()) . 'inc/');
define('SILKBLOG_PHP_FUNCTIONS', trailingslashit(get_template_directory()) . 'functions/');


/**
 * Checks whether woocommerce is active or not
 *
 * @return boolean
 */
function silkblog_is_woocommerce_active()
{
    if (class_exists('woocommerce')) {
        return true;
    } else {
        return false;
    }
}


/**
 * If woocommerce is active, load compatibility file
 */
if (silkblog_is_woocommerce_active()) {
    require_once(SILKBLOG_PHP_INCLUDE . 'woocommerce.php');
}


/** Register all navigation menus */
require_once(SILKBLOG_PHP_FUNCTIONS . 'menu.php');

/** theme function */
require_once(SILKBLOG_PHP_FUNCTIONS . 'function-hooks.php');



/**
 * Implement the Custom Header feature.
 */
require_once(SILKBLOG_PHP_INCLUDE . 'custom-header.php');


//load widgets ,kirki ,customizer,functions
require_once(SILKBLOG_PHP_INCLUDE . 'kirki/kirki.php');
require_once(SILKBLOG_PHP_INCLUDE . 'customizer.php');


if (!function_exists('silkblog_setup')) :
    //**************silkblog SETUP******************//
    function silkblog_setup()
    {

        // Set the default content width.
        $GLOBALS['content_width'] = 740;

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');


        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        //Register Menus
        register_nav_menus(array(
            'primary' => __('Primary Navigation(Header)', 'silk-blog'),

        ));

        // Declare WooCommerce support
        add_theme_support('woocommerce');

        // Add theme support for woocommerce product gallery added in WooCommerce 3.0.
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-slider');

        //Custom Background
        $args = array(
            'default-color' => 'F8F9FB',
        );
        add_theme_support('custom-background', $args);

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /*
         * Enable support for custom Header image.
         *
         *  @since advance
         */
        $args = array(
            'flex-width'    => true,
            'flex-height'   => true,
            'header-text'   => false,
        );
        add_theme_support('custom-header', $args);

        //Post Thumbnail
        add_theme_support('post-thumbnails');

        // Enables post and comment RSS feed links to head
        add_theme_support('automatic-feed-links');

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');
        /*

    /*
         * Enable support for custom logo.
         *
         *  @since silkblog
         */


        $defaults = array(
            'height'      => 100,
            'width'      => 200,
            'flex-width'  => true,
            'flex-height'  => true,
            'header-text' => array('site-title', 'site-description'),
        );
        add_theme_support('custom-logo', $defaults);

        /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
        add_theme_support('post-thumbnails');

        // Add featured image sizes
        //
        // Sizes are optimized and cropped for landscape aspect ratio
        // and optimized for HiDPI displays on 'small' and 'medium' screen sizes.
        add_image_size('silkblog-small', 540, 370, true); // name, width, height, crop
        add_image_size('silkblog-medium', 750, 450, true);
        add_image_size('silkblog-post-layout1', 400, 275, true);
        add_image_size('silkblog-post-lay2', 400, 258, true);
        add_image_size('silkblog-large', 1200, 500, true);
        add_image_size('silkblog-xlarge', 1920, 600, true);

        if (class_exists('woocommerce')) {
            add_image_size('silkblog-shop', 300, 300, true);
            add_image_size('silkblog-shop-2x', 460, 700, true);
        }
    }
endif; // silkblog_setup
add_action('after_setup_theme', 'silkblog_setup');



//Load CSS files

function silkblog_scripts()
{
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/fonts/awesome/css/font-awesome.min.css', 'font_awesome', true);
    wp_enqueue_style('silkblog_core', get_template_directory_uri() . '/css/silkblog.min.css', 'silkblogcore_css', true);
    wp_enqueue_style('silkblog-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'silkblog_scripts');



//Load Java Scripts
function silkblog_head_js()
{
    if (!is_admin()) {
        wp_enqueue_script('jquery');
        wp_enqueue_script('silkblog_other', get_template_directory_uri() . '/js/silkblog_other.min.js', array('jquery'), true);

        if (is_singular()) {
            wp_enqueue_script('comment-reply');
        }
    }
}
add_action('wp_enqueue_scripts', 'silkblog_head_js');


/**
 * Adds css style for customizer ui
 */
function silkblog_customizer_controls_styles()
{
    $theme_version = wp_get_theme()->get('version');
    wp_enqueue_style('customizer', get_template_directory_uri() . '/css/admin.css', array(), $theme_version);
}
add_action('customize_controls_enqueue_scripts', 'silkblog_customizer_controls_styles');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */


/** color function */
require_once(SILKBLOG_PHP_FUNCTIONS . 'custom-css.php');

/** welcome screen */
require_once(get_template_directory() . '/inc/welcome/welcome-screen.php');
