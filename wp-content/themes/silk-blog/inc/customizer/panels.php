<?php
if (!class_exists('Kirki')) {
	return;
}

/*  Add Config
 /* ------------------------------------ */
Kirki::add_config('silkblog', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
));


$socialarray = array(
	'' => esc_attr__('Please Select', 'silk-blog'),
	'facebook' => esc_attr__('Facebook', 'silk-blog'),
	'dribbble' => esc_attr__('Dribbble', 'silk-blog'),
	'twitter' => esc_attr__('Twitter', 'silk-blog'),
	'google' => esc_attr__('google plus', 'silk-blog'),
	'skype' => esc_attr__('skype', 'silk-blog'),
	'youtube' => esc_attr__('Youtube', 'silk-blog'),
	'flickr' => esc_attr__('Flickr', 'silk-blog'),
	'pinterest' => esc_attr__('Pinterest', 'silk-blog'),
	'vk' => esc_attr__('vk', 'silk-blog'),
	'rss' => esc_attr__('RSS', 'silk-blog'),
	'tumblr' => esc_attr__('Tumblr', 'silk-blog'),
	'instagram' => esc_attr__('Instagram', 'silk-blog'),
	'xing' => esc_attr__('Xing', 'silk-blog')
);
/* adding lasilkblogt panel */
Kirki::add_panel('upgradepro1_options', array(
	'priority'    => 10,
	'title'       => esc_attr__('Upgrade Pro', 'silk-blog'),
	'icon' => 'dashicons-update'
));
Kirki::add_panel('upgradepro_options', array(
	'priority'    => 10,
	'title'       => esc_attr__('About Theme', 'silk-blog'),
	'icon' => 'dashicons-warning'
));


Kirki::add_panel('silkblog_theme_options', array(
	'priority'    => 10,
	'title'       => esc_attr__('Theme options', 'silk-blog'),
	'description' => esc_attr__('This panel will provide all Site layout and Background color typography options of the Theme.', 'silk-blog'),
	'icon' => 'dashicons-admin-generic'
));
