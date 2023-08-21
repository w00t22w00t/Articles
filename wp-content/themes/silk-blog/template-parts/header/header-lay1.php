<?php

/**
 * Displays header layout 1
 *
 * silk themes
 * @subpackage silk_blog
 * @since 1.0
 * @version 1.0
 */
?>

<?php /*** Main menu start */ ?>
<div data-sticky-container="data-sticky-container">
    <?php if (true == get_theme_mod('sticky_menu_onof', true)) : ?>
        <div class="menu-outer z-depth-1 hide-for-medium-only hide-for-small-only " data-sticky="data-sticky" data-options="marginTop:0;" style="width:100%" data-anchor="content">
        <?php else : ?>
            <div class="menu-outer z-depth-1 hide-for-medium-only hide-for-small-only ">
            <?php endif; ?>
            <div class="grid-container ">
                <div class="top-bar">
                    <?php $all_social_icons = get_theme_mod('all_social_icons', ''); ?>
                    <?php if (!empty($all_social_icons)) : ?>

                        <div id="bnt-social" class="top-bar-left">
                            <?php slickblog_topbar_social(); ?>
                        </div>
                    <?php endif; ?>
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

        <?php
        $main_bgheader_style = get_theme_mod('main_bgheader_style', 'solid_bgheader');
        ?>

        <?php if (('img_header' == $main_bgheader_style) && get_header_image()) : ?>
            <div class="banner-warp hide-for-small-only hide-for-medium-only" data-interchange="[<?php echo esc_url(header_image()); ?>, small],[<?php echo esc_url(header_image()); ?>, large]">
                <div class="overlay"></div>
            <?php else : ?>
                <div class="banner-warp hide-for-small-only hide-for-medium-only  ">
                    <div class="grid-container ">
                        <div class="top-bar">
                        <?php endif; ?>
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
                    </div>
                </div>