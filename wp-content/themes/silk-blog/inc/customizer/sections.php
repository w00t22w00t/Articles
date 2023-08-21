<?php

/**
 * Add sections
 */


/* adding Header Options section*/
Kirki::add_section('silkblog_upgradepro1_options', array(
    'title'          => esc_attr__('Silk Blog Pro', 'silk-blog'),
    'panel'          => 'upgradepro1_options', // Not typically needed.
    'priority'       => 1,
    'type'           => 'expanded',
    'capability'     => 'edit_theme_options',
));

Kirki::add_section('silkblog_upgradepro_options', array(
    'title'          => esc_attr__('About Theme Info ', 'silk-blog'),
    'panel'          => 'upgradepro_options', // Not typically needed.
    'priority'       => 1,
    'type'           => 'expanded',
    'capability'     => 'edit_theme_options',
));

Kirki::add_section('silkblog_appearance_options', array(
    'title'          => esc_attr__('Site Appearance', 'silk-blog'),
    'panel'          => 'silkblog_theme_options', // Not typically needed.
    'priority'       => 1,
    'icon' => 'dashicons-admin-customizer'
));

Kirki::add_section('silkblog_header_options', array(
    'title'          => esc_attr__('Header Options', 'silk-blog'),
    'panel'          => 'silkblog_theme_options', // Not typically needed.
    'priority'       => 1,
    'icon' => 'dashicons-menu'
));

Kirki::add_section('slickblog_slider_settings', array(
    'title'          => esc_attr__('Home Slider', 'silk-blog'),
    'panel'          => 'silkblog_theme_options', // Not typically needed.
    'priority'       => 1,
    'icon' => 'dashicons-admin-customizer'
));


Kirki::add_section('silkblog_postlayout_settings', array(
    'title'          => esc_attr__('Post layout Options ', 'silk-blog'),
    'panel'          => 'silkblog_theme_options', // Not typically needed.
    'priority'       => 3,
    'icon' => 'dashicons-layout'
));

Kirki::add_section('silkblog_copyright_settings', array(
    'title'          => esc_attr__('Footer Options ', 'silk-blog'),
    'panel'          => 'silkblog_theme_options', // Not typically needed.
    'priority'       => 3,
    'icon' => 'dashicons-feedback'
));
