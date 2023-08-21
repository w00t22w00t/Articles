<?php

/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package silkblog
 */

?>

<div id="blog-content" class="content-wrapper padding-vertical-small-2 padding-vertical-large-3 margin-horizontal-cs-1">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : ?>
					<?php the_post(); ?>
					<div class="cell small-24 <?php if (!is_active_sidebar('right-sidebar')) : ?> large-22 <?php else : ?> <?php endif; ?> ">
						<article class="single-post-warp z-depth-1" id="post-<?php the_ID(); ?> ">
							<?php if (has_post_thumbnail()) : ?>
								<!-- featured-image -->
								<div class="featured-image img-div-cover">
									<?php $post_ids = get_post($post); ?>
									<?php echo get_the_post_thumbnail($post_ids, 'silkblog-xlarge', array('class' => 'float-center object-fit-images')); ?>
									<span class="single-cats button-group font-bold">
										<?php silkblog_category_list(); ?>
									</span>
								</div>
								<!-- featured-image END -->
							<?php else : ?>
								<span class="single-cats single-cats-noimg button-group font-bold">
									<?php silkblog_category_list(); ?>
								</span>
							<?php endif; ?>
							<!-- post single content body -->
							<div class="single-header-warp">
								<div class="single-post-title">
									<h1> <?php the_field('title2'); ?></h1>
								</div>
								<div class="post-meta">
									<span class="font-bold clear button secondary meta-author">
										<span><?php echo esc_html__('By', 'silk-blog'); ?> </span>
										<a class="vcard author" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" title="<?php echo esc_attr(get_the_author()); ?>">
											<?php echo get_the_author(); ?>
										</a>
									</span>
									<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
									<span class="font-bold clear button secondary">
										<?php echo silkblog_time_link(); ?>
									</span>
									<i class="fa fa-dot-circle-o" aria-hidden="true"></i>
									<span class="font-bold clear button secondary">
										<?php silkblog_meta_comment(); ?>
									</span>
								</div>
							</div>
							<div class="post-single-content-body">
								<?php
								the_content(sprintf(
									/* translators: %s: Name of current post. */
									wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'silk-blog'), array('span' => array('class' => array()))),
									the_title('<span class="screen-reader-text">"', '"</span>', false)
								));
								wp_link_pages(array(
									'before' => '<div class="page-links">' . esc_html__('Pages:', 'silk-blog'),
									'after'  => '</div>',
								));
								?>
								<?php if (has_tag()) { ?>
									<div class="post-single-tags callout border-none">
										<?php silkblog_meta_tag(); ?>
									</div>
								<?php } ?>
							</div>
							<!-- post single content body END -->
						</article>
						<?php get_template_part('template-parts/post/box', 'author'); ?>
						<?php if (comments_open() || get_comments_number()) { ?>
							<div class="box-comment-content z-depth-1">
								<div class="grid-x grid-padding-x align-center">
									<div class="cell large-22 medium-24 small-24">
										<?php comments_template(); ?>
									</div>
								</div>
							</div>
						<?php } ?>
						<?php get_template_part('template-parts/post/related', 'post'); ?>
					</div>
				<?php endwhile ?>
			<?php endif ?>
			<!-- End of the loop. -->
			<?php get_template_part('sidebar'); ?>
		</div>
	</div>
</div>