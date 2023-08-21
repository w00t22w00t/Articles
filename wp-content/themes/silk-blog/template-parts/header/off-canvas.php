<!-- Mobile Menu -->


<div class="reveal reveal-menu position-right  off-canvas animated " id="offCanvasmobile" data-reveal>
  <button class="reveal-b-close " aria-label="Close menu" type="button" data-close>
    <i class="fa fa-window-close" aria-hidden="true"></i>
  </button>
  <div class="multilevel-offcanvas ">
    <?php silkblog_off_canvas_mobile(); ?>
    <?php $all_social_icons = get_theme_mod('all_social_icons'); ?>
    <?php if (!empty($all_social_icons)) : ?>
      <div class="off-canvas-social-wrap">
        <?php slickblog_topbar_social(); ?>
      </div>
    <?php endif; ?>
  </div>
</div>
<?php
$main_bgheader_style = get_theme_mod('main_bgheader_style', 'gradient_header');
$main_header_gradient = get_theme_mod('main_header_gradient', 'gradient_2');
?>
<?php if (('img_header' == $main_bgheader_style) && get_header_image()) : ?>
  <div class="mobile-header  show-for-small hide-for-large" data-interchange="[<?php echo esc_url(header_image()); ?>, small],[<?php echo esc_url(header_image()); ?>, large]">
  <?php else : ?>
    <div class="mobile-header  show-for-small hide-for-large <?php if (('gradient_header' == $main_bgheader_style)) : ?> <?php echo $main_header_gradient ?> <?php endif; ?> ">
    <?php endif; ?>
    <div class="grid-container full ">
      <div class="title-bar">
        <div class="title-bar-left">
          <div class="off-canvas-content" data-off-canvas-content>
            <button class="offcanvas-trigger" type="button" data-open="offCanvasmobile">
              <div class="hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </div>
            </button>
          </div>
        </div>
        <!--site-title-->
        <div class="logo-wrap is-logo-image title-bar-center" itemscope="" itemtype="http://schema.org/Organization">
          <div class="logo-inner">
            <?php the_custom_logo(); ?>
            <h1 class="site-title logo-title">
              <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
            </h1>
            <?php
            $description = get_bloginfo('description', 'display');
            if ($description || is_customize_preview()) : ?>
              <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
            <?php endif; ?>
          </div>
        </div>
        <!--site-title END-->
      </div>
    </div>
    </div>