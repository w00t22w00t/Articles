<?php

/**
 * Displays header layout 2
 *
 * silk themes
 * @subpackage silk_blog
 * @since 1.0
 * @version 1.0
 */
?>

<?php /*** Main menu start */ ?>
<?php $main_bgheader_style = get_theme_mod('main_bgheader_style', 'solid_bgheader'); ?>
<div class="head-lay2" data-sticky-container="data-sticky-container">
    <?php if (true == get_theme_mod('sticky_menu_onof', true)) : ?>
        <div class="menu-outer z-depth-1 hide-for-medium-only hide-for-small-only  no-js" data-sticky="data-sticky" data-options="marginTop:0;" style="width:100%" data-anchor="content" <?php if (('img_header' == $main_bgheader_style) && get_header_image()) : ?> data-interchange="[<?php echo esc_url(header_image()); ?>, small],[<?php echo esc_url(header_image()); ?>, large]" <?php endif; ?>>
        <?php else : ?>
            <div class="menu-outer z-depth-1 hide-for-medium-only hide-for-small-only  no-js" <?php if (('img_header' == $main_bgheader_style) && get_header_image()) : ?> data-interchange="[<?php echo esc_url(header_image()); ?>, small],[<?php echo esc_url(header_image()); ?>, large]" <?php endif; ?>>
            <?php endif; ?>
            <div class="grid-container ">
                <div class="top-bar">
                    <div class="top-bar-left">
                        <!--site-title SATRT-->
                        <div class="logo-inner">
                            <?php the_custom_logo(); ?>
                            <div class="site-branding">
                                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                                <?php $description = get_bloginfo('description', 'display');
                                if ($description || is_customize_preview()) : ?>
                                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                                <?php endif; ?>
                            </div><!-- .site-branding -->
                        </div>
                        <!--site-title END-->
                    </div>
                    <div class="main-menu-wrap ">
                        <?php if (has_nav_menu('primary')) : ?>
                            <?php silkblog_top_nav(); ?>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
            </div>
        </div>
        <?php /*** Site branding start */ ?>

        <?php /*** Site branding start */ ?>