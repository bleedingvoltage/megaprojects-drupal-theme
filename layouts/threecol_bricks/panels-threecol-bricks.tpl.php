<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 * This template provides a three column panel display layout, with each column 
 * roughly equal in width. It is 7 rows high; the top middle and bottom rows 
 * contain 1 column, while the third and fifth rows contain 3 columns.
 */
?>

<div class="panel-display panel-3col-bricks clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if ($content['top']): ?>
    <div class="panel-panel panel-col-top">
      <div class="inside"><?php print $content['top']; ?></div>
    </div>
  <?php endif ?>

  <div class="center-wrapper">
    <div class="panel-panel panel-col-first">
      <div class="inside"><?php print $content['left_above']; ?></div>
    </div>

    <div class="panel-panel panel-col">
      <div class="inside"><?php print $content['middle_above']; ?></div>
    </div>

    <div class="panel-panel panel-col-last">
      <div class="inside"><?php print $content['right_above']; ?></div>
    </div>  
  </div>
  
  <div class="panel-panel panel-col-middle">
    <div class="inside"><?php print $content['middle']; ?></div>
  </div>

  <div class="center-wrapper">
    <div class="panel-panel panel-col-first">
      <div class="inside"><?php print $content['left_below']; ?></div>
    </div>

    <div class="panel-panel panel-col">
      <div class="inside"><?php print $content['middle_below']; ?></div>
    </div>

    <div class="panel-panel panel-col-last">
      <div class="inside"><?php print $content['right_below']; ?></div>
    </div>
  </div>

  <?php if ($content['bottom']): ?>
    <div class="panel-panel panel-col-bottom">
      <div class="inside"><?php print $content['bottom']; ?></div>
    </div>
  <?php endif ?>
</div>
