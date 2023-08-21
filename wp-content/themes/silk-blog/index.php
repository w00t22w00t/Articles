<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package silkblog
 */

get_header(); ?>
<?php if (true == get_theme_mod('slider_on_off', true)) : ?>
  <?php get_template_part('template-parts/slider/slider', 'style2'); ?>
<?php endif; ?>
<?php $site_layout = get_theme_mod('site_layout', 'full'); ?>
<div id="blog-content" class="padding-vertical-large-3 padding-vertical-small-2 <?php if ('box_wbb z-depth-2' == $site_layout) : ?> margin-horizontal-cs-1 <?php endif; ?>">
  <div class="grid-container">
    <div class="grid-x grid-margin-x align-center ">
      <div class="cell  small-24 <?php echo silkblog_sidebar_layout(); ?> large-order-2 ">
        <?php $blogpost_style = get_theme_mod('layout_page_post', 'layout1'); ?>
        <div class="blog-container <?php if ('layout2' == $blogpost_style) : ?> post-wrap-layout-2 grid-x grid-padding-x grid-padding-y <?php endif; ?>">
          <?php if (have_posts()) : ?>
            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php
              /*
               * Include the Post-Format-specific template for the content.
               * If silkblog want to override this in a child theme, then include a file
               * called content-___.php (where ___ is the Post Format name) and that will be used instead.
               */
              get_template_part('template-parts/post/content', get_post_format());
              ?>
            <?php endwhile; ?>
            <div class="cell small-24  large-24 ">
              <?php the_posts_pagination(); ?>
            </div>
          <?php else : ?>
            <?php get_template_part('template-parts/post/content', 'none'); ?>
          <?php endif; ?>
        </div>
        <!--POST END-->
      </div>
    </div>
  </div>
</div>
<!--container END-->

<?php get_footer(); ?>