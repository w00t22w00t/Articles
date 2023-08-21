<?php
Kirki::add_config('silk_blog', array(
	'capability'  => 'edit_theme_options',
	'option_type' => 'theme_mod',
));


Kirki::add_field('silk_blog', array(
	'type'        => 'custom',
	'settings'    => 'silk_blog_pro_link3',
	'section'     => 'silkblog_upgradepro1_options',
	'default'     => '<a class="upgrade_button" target="_blank" href="' . esc_url('https://silkthemes.com/silk-blog/#xs_pricing_6') . '">' . esc_html__('Upgrade at 59$', 'silk-blog') . '</a>',
	'priority'    => 10,
));

//**** silk blog upsell pro */
Kirki::add_field('silk_blog', array(
	'type'        => 'custom',
	'settings'    => 'silk_blog_view_link_pro',
	'section'     => 'silkblog_upgradepro_options',
	'default'     => '<a class="btn draw-border" target="_blank" href="' . esc_url('https://silkthemes.com/silk-blog/') . '">' . esc_html__('View Theme Page', 'silk-blog') . '</a>',
	'priority'    => 10,
));


Kirki::add_field('silk_blog', array(
	'type'        => 'custom',
	'settings'    => 'silk_blog_view_link2',
	'section'     => 'silkblog_upgradepro_options',
	'default'     => '<a class="btn draw-border" target="_blank" href="' . esc_url('https://silkthemes.com/support/') . '">' . esc_html__('Support', 'silk-blog') . '</a>',
	'priority'    => 30,
));




Kirki::add_field('silk_blog', array(
	'type'        => 'select',
	'settings'    => 'site_layout',
	'label'       => __('select site layout', 'silk-blog'),
	'section'     => 'silkblog_appearance_options',
	'default'     => 'full',
	'priority'    => 10,
	'choices'     => array(
		'fluid main-raised' => esc_attr__('Material Layout', 'silk-blog'),
		'box_wbb z-depth-2' => esc_attr__('Box Layout', 'silk-blog'),
		'full' => esc_attr__('Full Layout', 'silk-blog'),
	),
));

Kirki::add_field('silk_blog', array(
	'type' => 'color',
	'settings' => 'silkblog_topbg_color',
	'label' => esc_attr__('Top Background Color', 'silk-blog'),
	'section' => 'silkblog_appearance_options',
	'default' => '#fafafa',
	'transport' => 'auto',
	'priority' => 10,
	'choices' => array(
		'alpha' => true
	),
	'output' => array(
		array(
			'element' => '.site-mask',
			'property' => 'background',
			'units' => ''
		),
	),
	'active_callback' => array(
		array(
			'setting' => 'site_layout',
			'operator' => '!==',
			'value' => 'full'
		)
	),
));

Kirki::add_field('silk_blog', array(
	'type' => 'color',
	'settings' => 'silkblog_color_general',
	'label' => esc_attr__('Primary Color', 'silk-blog'),
	'section' => 'silkblog_appearance_options',
	'default' => '#595ffb',
	'transport' => 'auto',
	'priority' => 10,
	'choices' => array(
		'alpha' => true
	),
	'output' => array(
		array(
			'element' => '.single-product .product_meta span > *,#sub_banner .breadcrumbs a,.post-wrap-layout-2 .card .category.text-info a,.button.hollow.secondary,.single-header-warp .post-meta a,.comment-title h2,h2.comment-reply-title,.logged-in-as a,.author-title a,.woocommerce ul.products li.product a, .woocommerce ul.products li.product .woocommerce-loop-category__title, .woocommerce ul.products li.product .woocommerce-loop-product__title, .woocommerce ul.products li.product h3, .woocommerce ul.products li.product .price, .woocommerce div.product .woocommerce-tabs ul.tabs li.active a,.woocommerce .star-rating span::before,.card .card-footer .right .button.add_to_cart_button,.woocommerce div.product .woocommerce-tabs ul.tabs.wc-tabs li.active a,.woocommerce-product-rating a,.top-footer-wrap .widget_tag_cloud a:hover',
			'property' => 'color',
			'units' => ''
		),
		array(
			'element' => '.widget_search .search-submit,.slider-content2 .button.hollow.secondary ,.page-404 .search-submit,.widget_search .wp-block-search__button,.woocommerce span.onsale,.comment-list .comment-reply-link,.navigation .nav-links .current,.single-cats.button-group .button,.silkblog-author-bttom .button,.comment-form .form-submit input#submit, a.box-comment-btn, .comment-form .form-submit input[type="submit"],.scroll_to_top.floating-action.button,.button.secondary,.block-content-none .search-submit,h1.entry-title::after,.woocommerce div.product form.cart .button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button',
			'property' => 'background',
			'units' => ''
		),
		array(
			'element' => '.widget_search input[type=search]:focus,.comment-form textarea:focus, .comment-form input[type="text"]:focus, .comment-form input[type="search"]:focus, .comment-form input[type="tel"]:focus, .comment-form input[type="email"]:focus, .comment-form [type=url]:focus, .comment-form [type=password]:focus,.slider-content2 .button.hollow.secondary ,.navbar-search-bar-container,.multilevel-offcanvas.off-canvas.is-transition-overlap.is-open,.button.hollow.secondary,.sidebar-inwrap .widget_wrap ul li,.sidebar-inwrap .widget_wrap,.single-header-warp,.woocommerce div.product .woocommerce-tabs ul.tabs.wc-tabs li.active a',
			'property' => 'border-color',
			'units' => ''
		),
	)
));

Kirki::add_field('silk_blog', array(
	'type' => 'color',
	'settings' => 'silkblog_hover_color',
	'label' => esc_attr__('Hover Color', 'silk-blog'),
	'section' => 'silkblog_appearance_options',
	'default' => '#ff2c54',
	'transport' => 'auto',
	'priority' => 10,
	'choices' => array(
		'alpha' => true
	),
	'output' => array(
		array(
			'element' => '.post-wrap-layout-2 .card .category.text-info a:hover, .button.hollow.secondary.page_content a:hover, .single-content-wrap a:hover, .widget_wrap a:hover,.reveal-b-close:focus,.post-single-content-body a:hover,.post-single-content-body a:focus,.top-footer-wrap a:hover,.sidebar-inner a:hover,.card .card-footer .right .button.add_to_cart_button:hover,.woocommerce div.product .woocommerce-tabs ul.tabs.wc-tabs li a:hover,.post-wrap-layout-1  .button.hollow.secondary:hover',
			'property' => 'color',
			'units' => ''
		),
		array(
			'element' => '.widget_search .search-submit:focus,.navigation .nav-links .page-numbers.next:hover,.page-404 .search-submit:focus,.widget_search .wp-block-search__button:focus,.slider-content2 .button.hollow.secondary:hover ,.block-content-none .search-submit:hover,.main-menu-wrap .is-dropdown-submenu-parent .submenu li a:hover,.button.secondary:not(.hollow):hover,.woocommerce div.product form.cart .button:hover,.woocommerce #respond input#submit.alt:hover,.woocommerce a.button.alt:hover,.woocommerce button.button.alt:hover,.woocommerce input.button.alt:hover,.woocommerce #respond input#submit:hover,.woocommerce a.button:hover,.woocommerce button.button:hover,.woocommerce input.button:hover,.widget_search .wp-block-search__button:hover',
			'property' => 'background',
			'units' => ''
		),
		array(
			'element' => '.reveal-b-close:focus, a:focus img,.slider-content2 .button.hollow.secondary:hover ,.button.hollow.secondary:hover,.woocommerce div.product .woocommerce-tabs ul.tabs.wc-tabs li.active a:hover,.woocommerce div.product .woocommerce-tabs ul.tabs.wc-tabs li a:hover',
			'property' => 'border-color',
			'units' => ''
		),
		array(
			'element' => '.off-canvas-content button:focus,.button:focus,a:focus img,.comment-form .form-submit input#submit:focus, .entry input[type="submit"]:focus ',
			'property' => 'outline-color',
			'units' => ''
		),
	)

));

Kirki::add_field('silk_blog', array(
	'type' => 'color',
	'settings' => 'silkblog_sidebar_bgcolor',
	'label' => esc_attr__('Sidebar Background Color', 'silk-blog'),
	'section' => 'silkblog_appearance_options',
	'default' => '#F0F3FA',
	'transport' => 'auto',
	'priority' => 10,
	'choices' => array(
		'alpha' => true
	),
	'output' => array(
		array(
			'element' => '.sidebar-inwrap .widget_wrap',
			'property' => 'background',
			'units' => ''
		),
	)
));
/*=============================================>>>>>
= Header Options =
===============================================>>>>>*/

Kirki::add_field('silk_blog', array(
	'type' => 'select',
	'settings' => 'main_headerlay_style',
	'label' => esc_attr__('Header Layout', 'silk-blog'),
	'section' => 'silkblog_header_options',
	'default' => 'lay1',
	'priority' => 10,
	'choices' => array(
		'lay1' => esc_attr__('Layout 1', 'silk-blog'),
		'lay2' => esc_attr__('Layout 2', 'silk-blog')
	),
));

Kirki::add_field('silk_blog', array(
	'type'        => 'spacing',
	'settings'    => 'header_main_padding',
	'label'       => __('Main Header height', 'silk-blog'),
	'section'     => 'silkblog_header_options',
	'transport' => 'auto',
	'default'     => array(
		'top'    => '30px',
		'bottom' => '30px',
		'left'   => '10px',
		'right'  => '10px',
	),
	'output' => array(
		array(
			'element' => '.banner-warp',
			'property' => 'padding',
		)
	),
	'active_callback' => array(
		array(
			'setting' => 'main_headerlay_style',
			'operator' => '!==',
			'value' => 'lay2'
		)
	),
));

Kirki::add_field('silk_blog', array(
	'type' => 'select',
	'settings' => 'main_bgheader_style',
	'label' => esc_attr__('Header Background Style', 'silk-blog'),
	'section' => 'silkblog_header_options',
	'default' => 'solid_bgheader',
	'priority' => 10,
	'choices' => array(
		'img_header' => esc_attr__(' Header Image', 'silk-blog'),
		'solid_bgheader' => esc_attr__('Color', 'silk-blog')
	),
));

// Add Fields Solid Color.
Kirki::add_field('silk_blog', array(
	'type'        => 'color',
	'settings'    => 'header_solidbg_color',
	'label'       => __('background color', 'silk-blog'),
	'section'     => 'silkblog_header_options',
	'default'     => '#fff',
	'transport' => 'auto',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element' => '.header-wrap .banner-warp,.mobile-header',
			'property' => 'background',
			'units' => ''
		)
	),
	'active_callback' => array(
		array(
			'setting' => 'main_bgheader_style',
			'operator' => '==',
			'value' => 'solid_bgheader'
		)
	),
));

Kirki::add_field('silk_blog', array(
	'type'        => 'color',
	'settings'    => 'header_titledic_text',
	'label'       => __('Title And description color', 'silk-blog'),
	'section'     => 'silkblog_header_options',
	'default'     => '#0a0a0a',
	'transport' => 'auto',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element' => '.header-wrap .banner-warp .site-branding p,.site-branding h1 a',
			'property' => 'color',
			'units' => ''
		)
	),
));



Kirki::add_field('silk_blog', array(
	'type' => 'custom',
	'settings' => 'silkthemes_seperator_menustyle',
	'section' => 'silkblog_header_options',
	'default' => '<h4>' . esc_html__('Menu Options', 'silk-blog') . '</h4>'
));

Kirki::add_field('silk_blog', array(
	'type'        => 'switch',
	'settings'    => 'sticky_menu_onof',
	'label'       => esc_attr__('Enable/Disable sticky Menu', 'silk-blog'),
	'section'     => 'silkblog_header_options',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_attr__('Enable', 'silk-blog'),
		'off' => esc_attr__('Disable', 'silk-blog'),
	),
));

Kirki::add_field('silk_blog', array(
	'type'        => 'color',
	'settings'    => 'menu_text_color',
	'label'       => esc_attr__('Menu Text color', 'silk-blog'),
	'section'     => 'silkblog_header_options',
	'default'     => '#0a0a0a',
	'transport' => 'auto',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element' => '.main-menu-wrap .dropdown.menu a,.navbar-search .navbar-search-button .fa,.offcanvas-trigger,#sub_banner .top-bar .subheader,#sub_banner .top-bar .breadcrumbs li ',
			'property' => 'color',
			'units' => ''
		),
		array(
			'element' => '.is-dropdown-submenu .is-dropdown-submenu-parent.opens-right > a::after',
			'property' => 'border-left-color',
			'units' => ''
		),
		array(
			'element' => '.menu-icon::after',
			'property' => 'background',
			'units' => ''
		)

	),

));

Kirki::add_field('silk_blog', array(
	'type'        => 'color',
	'settings'    => 'menu_bg_color',
	'label'       => __('Menu background color', 'silk-blog'),
	'section'     => 'silkblog_header_options',
	'default'     => '#fcfcfc',
	'transport' => 'auto',
	'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element' => '#sub_banner_page,.menu-outer,#sub_banner,.main-menu-wrap .is-dropdown-submenu-parent .submenu li a',
			'property' => 'background-color',
			'units' => ''
		)
	),

));

Kirki::add_field('silk_blog', array(
	'type' => 'repeater',
	'label' => esc_attr__('Add social icon', 'silk-blog'),
	'section' => 'silkblog_header_options',
	'priority' => 10,
	'default'      => [
		[
			'social_icon'   => 'facebook',
			'social_url'    => '#',
		],
		[
			'social_icon'   => 'facebook',
			'social_url'    => '#',
		],
	],
	'transport'   => 'postMessage',
	'row_label' => array(
		'type' => 'field',
		'value' => esc_attr__('Social', 'silk-blog'),
		'field' => 'social_icon'
	),
	'settings' => 'all_social_icons',
	'fields' => array(
		'social_icon' => array(
			'type' => 'select',
			'label' => esc_attr__('Icon', 'silk-blog'),
			'default' => 'facebook',
			'choices' => $socialarray,
		),
		'social_url' => array(
			'type' => 'url',
			'label' => esc_attr__('Link URL', 'silk-blog'),
			'default' => '#'
		),
	),
	'active_callback' => array(
		array(
			'setting' => 'main_headerlay_style',
			'operator' => '!==',
			'value' => 'lay2'
		)
	),
));
/*=============================================>>>>>
= Footer Options =
===============================================>>>>>*/
Kirki::add_field('silk_blog', array(
	'type' => 'color',
	'settings' => 'silk_widgets_bgcolor',
	'label' => esc_attr__('Widgets background color', 'silk-blog'),
	'section' => 'silkblog_copyright_settings',
	'default' => '#fff',
	'transport' => 'auto',
	'priority' => 10,
	'choices' => array(
		'alpha' => true
	),
	'output' => array(
		array(
			'element' => '#footer .top-footer-wrap',
			'property' => 'background-color',
			'units' => ''
		)
	)

));



/*----------- Footer COPYRIGHT options -----------*/

Kirki::add_field('silk_blog', array(
	'type' => 'color',
	'settings' => 'silk_copyright_bgcolor',
	'label' => esc_attr__('Copyright background color', 'silk-blog'),
	'section' => 'silkblog_copyright_settings',
	'default' => '#fdfdfd',
	'transport' => 'auto',
	'priority' => 10,
	'choices' => array(
		'alpha' => true
	),
	'output' => array(
		array(
			'element' => '#footer .footer-copyright-wrap',
			'property' => 'background-color',
			'units' => ''
		)
	)

));

Kirki::add_field('silk_blog', array(
	'type'        => 'typography',
	'settings'    => 'silk_copyright_typography',
	'label'       => esc_attr__('Copyright typography', 'silk-blog'),
	'section'     => 'silkblog_copyright_settings',
	'transport' => 'auto',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => '400',
		'font-size'      => '16px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array('latin-ext'),
		'color'          => '#454d63',
		'text-transform' => 'none',
	),
	'priority'    => 10,
	'output' => array(
		array(
			'element' => '.copy-text,#footer .footer-copyright-wrap,.footer-copyright-text p,.footer-copyright-wrap a,.footer-copyright-wrap li,.footer-copyright-wrap ul,.footer-copyright-text ol',
			'property' => 'color',
			'units' => ''
		),
	),
	'choices' => array(
		'fonts' => array(
			'google' => array('popularity', 20),
		),
	),
));

Kirki::add_field('silk_blog', array(
	'type' => 'editor',
	'settings' => 'silkblog_footertext',
	'label' => __('Copyright text', 'silk-blog'),
	'section' => 'silkblog_copyright_settings',
	'priority' => 10,
	'transport' => 'postMessage',
	'partial_refresh' => array(
		'silkblog_footertext' => array(
			'selector' => '#footer-copyright',
			'render_callback' => function () {
				silkblog_site_info();
			}
		),
	),
));



/*=============================================>>>>>
= post layout options =
===============================================>>>>>*/

Kirki::add_field('silk_blog', array(
	'type' => 'radio-image',
	'settings' => 'layout_page_post',
	'label' => esc_html__('Post Layout', 'silk-blog'),
	'section' => 'silkblog_postlayout_settings',
	'default' => 'layout1',
	'priority' => 10,
	'choices' => array(
		'layout1' => get_template_directory_uri() . '/images/list-layout-listing.svg',
		'layout2' => get_template_directory_uri() . '/images/list-layout-grid.svg',
	)
));

Kirki::add_field('silk_blog', array(
	'type'        => 'checkbox',
	'settings'    => 'checkbox_read_more',
	'label'       => esc_attr__('on/off readmore', 'silk-blog'),
	'section'     => 'silkblog_postlayout_settings',
	'default'     => false,
));
Kirki::add_field('silk_blog', array(
	'type' => 'radio-image',
	'settings' => 'sidbar_position_gen',
	'label' => esc_html__('Layout Sidebar', 'silk-blog'),
	'section' => 'silkblog_postlayout_settings',
	'default' => 'right',
	'priority' => 10,
	'choices' => array(
		'full' => get_template_directory_uri() . '/images/fullwidth.svg',
		'left' => get_template_directory_uri() . '/images/left-sidebar.svg',
		'right' => get_template_directory_uri() . '/images/right-sidebar.svg',
	)
));

/*=============================================>>>>>
= slider options =
===============================================>>>>>*/

/* Slider */

Kirki::add_field('silk_blog', array(
	'type'        => 'checkbox',
	'settings'    => 'slider_on_off',
	'label'       => esc_attr__('Show Slider', 'silk-blog'),
	'section'     => 'slickblog_slider_settings',
	'default'     => true,
));

Kirki::add_field('silk_blog', array(
	'type'        => 'number',
	'settings'    => 'slide_to_show',
	'label'       => esc_attr__('Slide to show in a row', 'silk-blog'),
	'section'     => 'slickblog_slider_settings',
	'default'     => 2,
	'choices'     => array(
		'min'  => 2,
		'max'  => 3,
		'step' => 1,
	),
));

Kirki::add_field('silk_blog', array(
	'type'        => 'number',
	'settings'    => 'slide_postto_show',
	'label'       => esc_attr__('Post to show', 'silk-blog'),
	'section'     => 'slickblog_slider_settings',
	'default'     => 4,
	'choices'     => array(
		'min'  => 1,
		'max'  => 50,
		'step' => 1,
	),
));


Kirki::add_field('silk_blog', array(
	'type' => 'select',
	'settings' => 'category_list_slider',
	'label' => esc_attr__('Select Category', 'silk-blog'),
	'section' => 'slickblog_slider_settings',
	'priority' => 10,
	'multiple' => 999,
	'choices' => Kirki_Helper::get_terms(array('taxonomy' => 'category'))

));

Kirki::add_field('silk_blog', array(
	'type'        => 'checkbox',
	'settings'    => 'sticky_checkbox_slider',
	'label'       => esc_attr__('Hide sticky Post', 'silk-blog'),
	'section'     => 'slickblog_slider_settings',
	'default'     => false,
));
Kirki::add_field('silk_blog', array(
	'type'        => 'checkbox',
	'settings'    => 'onof_slider_cat',
	'label'       => esc_attr__('Show/Hide Slider Category', 'silk-blog'),
	'section'     => 'slickblog_slider_settings',
	'default'     => true,
	'output' => array(
		array(
			'element'       => '#slider .slider-content .label  ',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array(true),
		),
	),
));

Kirki::add_field('magazine_art', array(
	'type' => 'select',
	'settings' => 'slider_post_order_by',
	'label' => esc_attr__('Show post orderby', 'silk-blog'),
	'section' => 'slickblog_slider_settings',
	'default' => 'date',
	'priority' => 10,
	'choices' => array(
		'none' => esc_attr__('None', 'silk-blog'),
		'date' => esc_attr__('Date', 'silk-blog'),
		'ID' => esc_attr__('ID', 'silk-blog'),
		'author' => esc_attr__('Author', 'silk-blog'),
		'title' => esc_attr__('Title', 'silk-blog'),
		'rand' => esc_attr__('Random', 'silk-blog')
	)
));


Kirki::add_field('silk_blog', array(
	'type' => 'custom',
	'settings' => 'slider_notice_settings1',
	'section' => 'slickblog_slider_settings',
	'default' => '<h2 class="silk-kirki-seperator">' . esc_html__('Typography Pro Version', 'silk-blog') . '</h2>',
));





Kirki::add_field('silk_blog', array(
	'type' => 'custom',
	'settings' => 'slider_notice_settings',
	'section' => 'slickblog_slider_settings',
	'default' => '<h2 class="silk-kirki-seperator">' . esc_html__('Slider Settings', 'silk-blog') . '</h2>',
));



Kirki::add_field('silk_blog', array(
	'type'        => 'checkbox',
	'settings'    => 'onof_auto_play',
	'label'       => esc_attr__('On/Off Auto Play', 'silk-blog'),
	'section'     => 'slickblog_slider_settings',
	'default'     => true,
));
