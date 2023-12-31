<?php
/**
 *
 * Displays Next Previous Posts on single posts page.
 *
 * @package silkblog
 *
 * @since silkblog 1.0.0
 */
;?>

<div class="single-nav clearfix" role="navigation">
        <?php
  				the_post_navigation( array(
  					'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'silk-blog' ) . '</span><span class="newspaper-nav-icon nav-left-icon"><i class="fa fa-angle-left"></i></span><span class="nav-left-link">%title</span>',
  					'next_text' => ' <span class="screen-reader-text">' . __( 'Next Post', 'silk-blog' ) . '</span><span class="nav-right-link">%title</span><span class="newspaper-nav-icon nav-right-icon"><i class="fa fa-angle-right"></i></span>',
          ) );?>
</div>
