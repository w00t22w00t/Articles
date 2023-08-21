<?php

/**
 * Handles all page layout
 * adding or removing layout to certain page
 * will be controlled from this file
 *
 * @package silk themes
 * @subpackage silk blog
 * @since silk blog 1.0.0
 */



/*----------- sidebar layout Blog Page-----------*/
if (!function_exists('silkblog_sidebar_layout')) :
  function silkblog_sidebar_layout()
  {
    $sidbar_position = get_theme_mod('sidbar_position_gen', 'right');
    $blogpost_style = get_theme_mod('layout_page_post', 'layout1');
    if (!is_active_sidebar('right-sidebar') || 'full' == $sidbar_position) {
      if ('layout1' == $blogpost_style) :
        $siderbar = 'large-20';
      else :
        $siderbar = 'large-24';
      endif;
    } elseif (is_active_sidebar('right-sidebar') || ('right' == $sidbar_position)) {
      $siderbar = ' ';
    } elseif (is_active_sidebar('right-sidebar') || ('left' == $sidbar_position)) {
      $siderbar = ' ';
    }
    $siderbars = $siderbar;
    return $siderbars;
  }
endif;
