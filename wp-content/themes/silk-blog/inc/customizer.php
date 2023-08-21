<?php

/**
 * silkblog Theme Customizer
 *
 * @package silkblog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function silkblog_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';



    /*----------- Move Customizer default Control -----------*/
    $silkblog_appearance_options = $wp_customize->get_control('background_color');
    if ($silkblog_appearance_options) {
        $silkblog_appearance_options->section = 'silkblog_appearance_options';
    }

    $wp_customize->selective_refresh->add_partial('blogname', array(
        'selector'        => '.site-title a',
        'render_callback' => 'silkblog_customize_partial_blogname',
    ));
    $wp_customize->selective_refresh->add_partial('blogdescription', array(
        'selector'        => '.site-description',
        'render_callback' => 'silkblog_customize_partial_blogdescription',
    ));

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('all_social_icons', array(
            'selector'            => '#bnt-social',
            'container_inclusive' => true,
            'render_callback'     => 'slickblog_topbar_social',
            'fallback_refresh'    => false, // Prevents refresh loop when document does not contain .cta-wrap selector. This should be fixed in WP 4.7.
        ));
    }
}
add_action('customize_register', 'silkblog_customize_register');




/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function silkblog_customize_preview_js()
{
    wp_enqueue_script('silkblog_customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20130508', true);
}
add_action('customize_preview_init', 'silkblog_customize_preview_js');


require get_template_directory() . '/inc/customizer/panels.php';
require get_template_directory() . '/inc/customizer/sections.php';
require get_template_directory() . '/inc/customizer/fields.php';
