<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package silkthemes
 * @subpackage silk_blog
 * @since silk_blog 1.0
 */
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'silk-blog'); ?></a>

	<?php /* start site warp */ ?>
	<?php $site_layout = get_theme_mod('site_layout', 'full'); ?>
	<div id="site-wrapper" class=" site_layout <?php echo esc_attr($site_layout); ?> grid-container ">
		<div class="header-wrap">
			<?php get_template_part('template-parts/header/off', 'canvas'); ?>
			<?php
			$main_headerlay_style = get_theme_mod('main_headerlay_style', 'lay1');
			get_template_part('template', 'parts/header/header-' . $main_headerlay_style . '');
			?>
		</div>
		<div id="content" class="site-mask">