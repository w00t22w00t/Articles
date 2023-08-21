<?php

/**
 * silk blog Theme Custom color
 *
 * @package silk themes
 * @subpackage silk blog
 * @since silk blog 1.0.0
 */

function silkblog_inline_style()
{
	$inline_css = '';
	// Get the background color for text
	$silkblog_color_general   =  get_theme_mod('silkblog_color_general', '#ff2c54');


	if (225 > ariColor::newColor($silkblog_color_general)->luminance) {
		// Our background color is dark, so we need to create a light text color.
		$text_color = Kirki_Color::adjust_brightness($silkblog_color_general, 225);
	} else {

		// Our background color is light, so we need to create a dark text color
		$text_color = Kirki_Color::adjust_brightness($silkblog_color_general, -225);
	}
	$text_color = esc_attr($text_color);
	/*  Color calculation for text */
	$inline_css .=
		".button.secondary,
	.navigation .nav-links .current,
	.single-cats.button-group .button,
	.comment-form .form-submit input#submit,
	a.box-comment-btn,
	.comment-form .form-submit input[type='submit'],
	.silkblog-author-bttom .button a,
	.block-content-none .search-submit,
	.scroll_to_top.floating-action.button,
	.woocommerce div.product form.cart .button,
	.woocommerce #respond input#submit.alt,
	.woocommerce a.button.alt, .woocommerce button.button.alt,
	.woocommerce input.button.alt, .woocommerce #respond input#submit,
	.woocommerce a.button, .woocommerce button.button, .woocommerce input.button,
	.comment-list .comment-reply-link,
	.slider-content2 .button.hollow.secondary
	{
		color: $text_color ;
	}";

	// Get the text color for  hover
	$silkblog_color_general   =  get_theme_mod('silkblog_hover_color', '#3a3939');


	if (225 > ariColor::newColor($silkblog_color_general)->luminance) {
		// Our background color is dark, so we need to create a light text color.
		$text_color_hover = Kirki_Color::adjust_brightness($silkblog_color_general, 225);
	} else {

		// Our background color is light, so we need to create a dark text color
		$text_color_hover = Kirki_Color::adjust_brightness($silkblog_color_general, -225);
	}
	$text_color_hover = esc_attr($text_color_hover);
	/*  Color calculation for text */
	$inline_css .=
		".button.secondary:hover,
.main-menu-wrap .is-dropdown-submenu-parent .submenu li a:hover,
.single-cats.button-group .button:hover,
.silkblog-author-bttom .button a:hover,
.block-content-none .search-submit:hover,
.woocommerce div.product form.cart .button:hover,
.woocommerce #respond input#submit.alt:hover,
.woocommerce a.button.alt:hover,
.woocommerce button.button.alt:hover,
.woocommerce input.button.alt:hover,
.woocommerce #respond input#submit:hover,
.woocommerce a.button:hover,
.woocommerce button.button:hover,
.woocommerce input.button:hover,
.slider-content2 .button.hollow.secondary:hover 
{
	color: $text_color_hover ;
}";

	// Get the text color for  hover
	$menu_bg_color   =  get_theme_mod('menu_bg_color', '#fff');


	if (225 > ariColor::newColor($menu_bg_color)->luminance) {
		// Our background color is dark, so we need to create a light text color.
		$sub_h1_color = Kirki_Color::adjust_brightness($menu_bg_color, 225);
	} else {

		// Our background color is light, so we need to create a dark text color
		$sub_h1_color = Kirki_Color::adjust_brightness($menu_bg_color, -225);
	}
	$sub_h1_color = esc_attr($sub_h1_color);

	/*  Color calculation for text */
	$inline_css .=
		".heade-page-nothumb h1,
	#sub_banner .top-bar-left h1
{
	color: $sub_h1_color ;
}";

	// sidebar text color 
	// Get the background color for text
	$silkblog_sidebar_bgcolor   =  get_theme_mod('silkblog_sidebar_bgcolor', '#F0F3FA');


	if (225 > ariColor::newColor($silkblog_sidebar_bgcolor)->luminance) {
		// Our background color is dark, so we need to create a light text color.
		$text_color = Kirki_Color::adjust_brightness($silkblog_sidebar_bgcolor, 225);
	} else {

		// Our background color is light, so we need to create a dark text color
		$text_color = Kirki_Color::adjust_brightness($silkblog_sidebar_bgcolor, -225);
	}
	$text_color = esc_attr($text_color);
	/*  Color calculation for text */
	$inline_css .=
		".sidebar-inwrap .widget_wrap ul li a,
		.sidebar-inwrap p,
		.sidebar-inwrap a,
		.sidebar-inwrap .widget_wrap ul li p,
		.sidebar-inwrap .widget-title h3, 
		.sidebar-inwrap .wp-block-group__inner-container h2,
		.sidebar-inwrap .widget-title h3:after, 
		sidebar-inwrap .wp-block-group__inner-container h2:after,
		.widget_wrap .tagcloud a
		{
			color: $text_color ;
		}";
	$inline_css .=
		".sidebar-inwrap .widget-title h3:after, 
		sidebar-inwrap .wp-block-group__inner-container h2:after
		{
			background-color: $text_color ;
		}";
	// footer text color 
	// Get the background color for text
	$silk_widgets_bgcolor   =  get_theme_mod('silk_widgets_bgcolor', '#fff');


	if (225 > ariColor::newColor($silk_widgets_bgcolor)->luminance) {
		// Our background color is dark, so we need to create a light text color.
		$text_color = Kirki_Color::adjust_brightness($silk_widgets_bgcolor, 225);
	} else {

		// Our background color is light, so we need to create a dark text color
		$text_color = Kirki_Color::adjust_brightness($silk_widgets_bgcolor, -225);
	}
	$text_color = esc_attr($text_color);
	/*  Color calculation for text */
	$inline_css .=
		".top-footer-wrap,
		.top-footer-wrap .widget_wrap ul li a,
		.top-footer-wrap .widget_wrap ul li p,
		.top-footer-wrap .widget-title h3, 
		.top-footer-wrap .wp-block-group__inner-container h2,
		.stop-footer-wrap .widget-title h3:after, 
		.top-footer-wrap .wp-block-group__inner-container h2:after,
		.top-footer-wrap .tagcloud a,
		.top-footer-wrap a
		{
			color: $text_color ;
		}";
	$inline_css .=
		".top-footer-wrap .widget-title h3:after, 
		.top-footer-wrap .wp-block-group__inner-container h2:after
		{
			background-color: $text_color ;
		}";
	wp_add_inline_style('silkblog-style', $inline_css);
}
add_action('wp_enqueue_scripts', 'silkblog_inline_style', 10);
