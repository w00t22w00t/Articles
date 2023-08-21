<?php

/**
 * Getting started template
 */

?>
<?php $theme = wp_get_theme(); ?>

<div id="getting_started" class="silkblog-tab-pane active">

	<div class="silkblog-tab-pane-center">

		<h1 class="silkblog-welcome-title"><?php printf(esc_html__('Welcome to %s!', 'silk-blog'), $theme->get('Name')); ?></h1>
		<p><?php esc_html__('We want to make sure you have the best experience using silkblog and that is why we gathered here all the necessary informations for you. We hope you will enjoy using silkblog, as much as we enjoy creating great products.', 'silk-blog'); ?>

	</div>

	<hr />
	<div class="silkblog-tab-pane-half">
		<h1><?php esc_html_e('Need more details?', 'silk-blog'); ?></h1>

		<p><?php printf(esc_html__('Please check our full documentation for detailed information on how to use %s.', 'silk-blog'), 'Silk Blog'); ?></p>

		<p>
			<a target="_blank" href="<?php echo esc_url('https://silkblog.silkthemes.com/documentation/'); ?>" class="button button-primary"><?php printf(esc_html__('%s Details', 'silk-blog'), 'Silk Blog'); ?></a>
		</p>
	</div>

	<div class="silkblog-tab-pane-half">
		<h1><?php esc_html_e('Go to the Customizer', 'silk-blog'); ?></h1>

		<p><?php echo esc_html__('Using the WordPress Customizer you can easily customize every aspect of the theme.', 'silk-blog'); ?></p>

		<p>
			<a href="<?php echo esc_url(wp_customize_url()); ?>" class="button button-primary"><?php printf(esc_html__('Start Customizing %s', 'silk-blog'), 'Silk Blog'); ?></a>
		</p>
	</div>

	<div class="silkblog-tab-pane-half">
		<h1><?php esc_html_e('Still have question? Ask Us, now!', 'silk-blog'); ?></h1>

		<p><?php echo esc_html__("Don't hesitate to ask any questions you have regarding our products.", 'silk-blog'); ?></p>

		<p>
			<a target="_blank" href="<?php echo esc_url('https://silkthemes.com/support/'); ?>" class="btn upgrade_button contact"><?php echo esc_html__('Get Support', 'silk-blog'); ?></a>
		</p>
	</div>

	<div class="silkblog-clear"></div>

</div>