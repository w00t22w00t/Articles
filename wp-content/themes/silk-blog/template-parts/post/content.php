<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package silkblog
 */

?>
	<?php
		$blogpost_style = get_theme_mod('layout_page_post','layout1');
		get_template_part('template-parts/layouts/part', ''.$blogpost_style .'');
