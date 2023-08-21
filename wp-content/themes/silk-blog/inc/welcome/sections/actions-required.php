<?php

/**
 * Actions required
 */

?>
<?php
$counter = 0;
$theme = wp_get_theme();
?>
<div id="actions_required" class="silkblog-tab-pane">
  <h1><?php printf(esc_html__('Keep up with %s\'s recommended actions', 'silk-blog'), $theme->get('Name')); ?></h1>
  <!-- NEWS -->

  <!-- Front page -->
  <?php if (get_option('show_on_front') == 'page') { ?>
    <div>
      <h3><?php esc_html_e('Go to Homepage Settings  "Front page displays" to "Your latest Post" ', 'silk-blog'); ?></h3>
      <p><a href="<?php echo wp_customize_url(); ?>" class="button button-primary"><?php esc_html_e('Go to Customizer', 'silk-blog'); ?></a></p>
    </div>
    <div class="one-three">


    </div>
  <?php
    $counter++;
  } else { ?>
  <?php } ?>
  <?php if ($counter == '0') { ?>
    <p><?php esc_html_e('Hooray! There are no recommended actions for you right now.', 'silk-blog'); ?></p>
  <?php }  ?>
  <div id="counter-count" data-counter="<?php echo absint($counter) ?>"></div>
</div>