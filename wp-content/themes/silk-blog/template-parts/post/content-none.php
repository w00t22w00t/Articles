<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package silkblog
 */

?>

<div class="block-content-none">
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
		<p class="pique-get-started"><?php printf( wp_kses( __( 'Ready to publish silkblogr first post? <a href="%1$s">Get started here</a>.', 'silk-blog' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
	<?php elseif ( is_search() ) : ?>
		<p><?php esc_html_e( 'Sorry, but nothing matched silkblogr search terms. Please try again with some different keywords.', 'silk-blog' ); ?></p>
		<?php get_search_form(); ?>
	<?php else : ?>
		<p><?php esc_html_e( 'It seems we can&rsquo;t find what silkblog&rsquo;re looking for. Perhaps searching can help.', 'silk-blog' ); ?></p>
		<?php get_search_form(); ?>
	<?php endif; ?>
</div>
