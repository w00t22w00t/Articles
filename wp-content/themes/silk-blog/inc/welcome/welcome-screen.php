<?php

/**
 * Welcome Screen Class
 */
class silkblog_Welcome
{

	/**
	 * Constructor for the welcome screen
	 */
	public function __construct()
	{
		/* create dashbord page */
		add_action('admin_menu', array($this, 'silkblog_welcome_register_menu'));
		/* activation notice */
		add_action('admin_enqueue_scripts', array($this, 'silkblog_welcome_style_and_scripts'));

		/* load welcome screen */
		add_action('silkblog_welcome', array($this, 'silkblog_welcome_getting_started'), 10);
		add_action('silkblog_welcome', array($this, 'silkblog_welcome_actions_required'), 20);
		add_action('silkblog_welcome', array($this, 'silkblog_welcome_support'), 40);
		add_action('silkblog_welcome', array($this, 'silkblog_welcome_upgrade_topro'), 30);

		/* activation notice */
		add_action('load-themes.php', array($this, 'silkblog_activation_admin_notice'));
	}

	/**
	 * Adds an admin notice upon successful activation.
	 */
	public function silkblog_activation_admin_notice()
	{
		global $pagenow;

		if (is_admin() && ('themes.php' == $pagenow) && isset($_GET['activated'])) {
			add_action('admin_notices', array($this, 'silkblog_welcome_admin_notice'), 99);
		}
	}

	/**
	 * Display an admin notice linking to the welcome screen
	 */
	public function silkblog_welcome_admin_notice()
	{
		// Get Theme Details from style.css
		$theme = wp_get_theme();
?>
		<div class="updated notice is-dismissible">
			<p><?php printf(esc_html('Welcome! Thank you for choosing %1s! To fully take advantage of the best our theme can offer please make sure you visit our %2s.', 'silk-blog'), $theme->get('Name'), '<a href="' . esc_url(admin_url('themes.php?page=silkblog-welcome')) . '">' . esc_html('welcome page', 'silk-blog') . '</a>'); ?></p>
			<p><a href="<?php echo esc_url(admin_url('themes.php?page=silkblog-welcome')); ?>" class="button" style="text-decoration: none;"><?php printf(esc_html('Get started with %1s', 'silk-blog'), $theme->get('Name')); ?></a></p>
		</div>
	<?php
	}

	/**
	 * Creates the dashboard page
	 * @see  add_theme_page()
	 */
	public function silkblog_welcome_register_menu()
	{
		// Get Theme Details from style.css
		$theme = wp_get_theme();
		add_theme_page('About Silk Blog', sprintf(__('About %s', 'silk-blog'), $theme->get('Name')), 'activate_plugins', 'silkblog-welcome', array($this, 'silkblog_welcome_screen'));
	}

	/**
	 * Load welcome screen css and javascript
	 */
	public function silkblog_welcome_style_and_scripts($hook_suffix)
	{
		if ('appearance_page_silkblog-welcome' == $hook_suffix) {
			wp_enqueue_style('silkblog-welcome-screen-css', get_template_directory_uri() . '/inc/welcome/css/welcome.css');
			wp_enqueue_script('silkblog-welcome-screen-js', get_template_directory_uri() . '/inc/welcome/js/welcome.js', array('jquery'));
		}
	}

	/**
	 * Welcome screen content
	 */
	public function silkblog_welcome_screen()
	{
	?>

		<ul class="silkblog-nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#getting_started" aria-controls="getting_started" role="tab" data-toggle="tab"><?php esc_html_e('Getting started', 'silk-blog'); ?></a></li>
			<li role="presentation" class="silkblog-tab silkblog-w-red-tab"><a href="#actions_required" aria-controls="actions_required" role="tab" data-toggle="tab"><?php esc_html_e('Actions recommended', 'silk-blog'); ?></a></li>
			<li role="presentation"><a href="#support" aria-controls="support" role="tab" data-toggle="tab"><?php esc_html_e('Support Us', 'silk-blog'); ?></a></li>
			<li class="silkblog-topro" role="presentation"><a href="#upgrade_topro" aria-controls="upgrade_topro" role="tab" data-toggle="tab"><?php esc_html_e('About Pro', 'silk-blog'); ?></a></li>

		</ul>

		<div class="silkblog-tab-content">

			<?php do_action('silkblog_welcome'); ?>

		</div>
<?php
	}

	/**
	 * Getting started
	 */
	public function silkblog_welcome_getting_started()
	{
		require_once(get_template_directory() . '/inc/welcome/sections/getting-started.php');
	}

	/**
	 * Actions required
	 */
	public function silkblog_welcome_actions_required()
	{
		require_once(get_template_directory() . '/inc/welcome/sections/actions-required.php');
	}

	/**
	 * Contribute
	 */
	public function silkblog_welcome_upgrade_topro()
	{
		require_once(get_template_directory() . '/inc/welcome/sections/pro.php');
	}
	/**
	 * Support
	 */
	public function silkblog_welcome_support()
	{
		require_once(get_template_directory() . '/inc/welcome/sections/support.php');
	}
}

$GLOBALS['silkblog_Welcome'] = new silkblog_Welcome();
