<?php

/**
 * Slider Sections
 *
 * @package Slick Blog
 */
?>

<?php
$category_show = get_theme_mod('onof_slider_cat');
$post_order_by = get_theme_mod('slider_post_order_by', 'date');
$slide_postto_show = get_theme_mod('slide_postto_show', 3);
$excerpt_slider_lenth = get_theme_mod('excerpt_slider_lenth', 30);
$category_list_slider = get_theme_mod('category_list_slider');

if (true == get_theme_mod('sticky_checkbox_slider', false)) :
  $sticky = get_option('sticky_posts');
else :
  $sticky = '';
endif;
$args = array(
  'post_type' => 'post',
  'posts_per_page' => $slide_postto_show,
  'cat' => $category_list_slider,
  'orderby' => $post_order_by,
  'post__not_in' => $sticky,
  'ignore_sticky_posts' => 1
);
$main_slider = new WP_Query($args);
?>
<div class="grid-container slider-full">


  <div class="cell large-auto small-24">
    <?php
    $value = get_theme_mod('onof_auto_play', true);
    $slide_speed_main = get_theme_mod('slide_speed_main', 6000);

    ?>
    <div id="slider" class="home-slider slick-slider slider-post-wrap  slider2" data-slick='{"slidesToShow": <?php echo esc_attr(get_theme_mod('slide_to_show', '2')); ?> , "slidesToScroll": <?php echo esc_attr(get_theme_mod('slide_to_show', '1')); ?> ,"autoplay":<?php echo esc_attr($value) ? 'true' : 'false'; ?>,"autoplaySpeed":<?php echo esc_attr($slide_speed_main); ?>}'>
      <?php if ($main_slider->have_posts()) : ?>
        <?php /* Start the Loop */ ?>
        <?php while ($main_slider->have_posts()) : $main_slider->the_post(); ?>
          <?php $postid = get_the_ID();
          $firstPosts[] = $postid;
          global $firstPosts;
          ?>
          <article class="wrap-slider">
            <div class="slider-thum">
              <?php $featured_img_url = get_template_directory_uri() . '/images/slide.jpg'; ?>
              <?php
              if (has_post_thumbnail()) { ?>
                <?php the_post_thumbnail('silkblog-large', array('class' => 'img-slider', 'link_thumbnail' => TRUE)); ?>
              <?php  } else { ?>

                <img class="img-slider" src="<?php echo esc_url($featured_img_url); ?>" />
              <?php } ?>
            </div>
            <div class="slider-content2">
              <div class="entry-meta">
                <?php if (true == get_theme_mod('onof_slider_cat', true)) : ?>
                  <?php silkblog_category_slider(); ?>
                <?php endif; ?>
                <h3 class="slider-title">
                  <?php the_field('title2'); ?>
                </h3>
              </div>
            </div>
          </article>
        <?php endwhile; ?>
      <?php else : ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div>

</div>