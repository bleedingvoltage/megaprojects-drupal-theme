<?php
/**
 * @file
 * Template for Westernmost.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout.
 */
?>

<div class="panel-display panel-westernmost clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <?php if ($content['11'] || $content['12']) : ?>
    <div class="panel-row westernmost-container westernmost-columns-2">
      <?php if ($content['11']) : ?>
        <div class="panel-panel westernmost-column-1">
          <div class="inside"><?php print $content['11']; ?></div>
        </div>
      <?php endif; ?>
      <?php if ($content['12']) : ?>
        <div class="panel-panel westernmost-column-2">
          <div class="inside"><?php print $content['12']; ?></div>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

</div>
