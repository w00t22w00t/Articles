<?php get_header();
/**
 * The template for displaying archive
 *
 * Silk Themes
 * @subpackage silkblog
 * @since silkblog 1.0
 */
?>
<!--Call Sub Header-->
<div id="sub_banner">
  <div class="top-bar">
    <div class="top-bar-left">
      <div class="top-bar-title">
        <h1 class="subheader">
          <?php echo silkblog_page_title_call(); ?>
        </h1>
      </div>
    </div>
    <div class="top-bar-right">
      <div class="breadcrumb-wrap">
        <?php echo silkblog_breadcrumb(); ?>
      </div>
    </div>
  </div>
</div>
<!--Call Sub Header-->

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
      <?php $sidbar_positionmn = get_theme_mod('sidbar_position_gen', 'right');
      if (('full' == $sidbar_positionmn)) {
        echo '';  // nosidebar
      } elseif (('right' == $sidbar_positionmn)) {
        echo '<div class="cell small-24 medium-22 large-7 large-order-2">';
        get_template_part('sidebar');
        echo '</div>';
      } elseif (('left' == $sidbar_positionmn)) {
        echo '<div class="cell small-24 medium-22 large-7 large-order-1">';
        get_template_part('sidebar');
        echo '</div>';
      }
      ?>
      <!--sidebar END-->
    </div>
  </div>

</div>
<!--container END-->

<?php get_footer(); ?>