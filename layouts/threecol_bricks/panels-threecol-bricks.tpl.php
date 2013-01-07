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

  <div class="panel-row columns-1">
    <div class="panel-panel panel-col-top">
      <div class="inside"><?php print $content['top_0']; ?></div>
    </div>
  </div>

  <div class="panel-row columns-5">
    <div class="panel-panel panel-col-0">
      <div class="inside"><?php print $content['col_0']; ?></div>
    </div>
    <div class="panel-panel panel-col-1">
      <div class="inside"><?php print $content['col_1']; ?></div>
    </div>
    <div class="panel-panel panel-col-2">
      <div class="inside"><?php print $content['col_2']; ?></div>
    </div>
    <div class="panel-panel panel-col-3">
      <div class="inside"><?php print $content['col_3']; ?></div>
    </div>
    <div class="panel-panel panel-col-4">
      <div class="inside"><?php print $content['col_4']; ?></div>
    </div>
  </div>

  <div class="panel-row columns-3">
    <div class="panel-panel panel-col-first">
      <div class="inside"><?php print $content['lef_0']; ?></div>
    </div>

    <div class="panel-panel panel-col">
      <div class="inside"><?php print $content['mid_0']; ?></div>
    </div>

    <div class="panel-panel panel-col-last">
      <div class="inside"><?php print $content['rig_0']; ?></div>
    </div>  
  </div>
  
  <div class="panel-row columns-1">
    <div class="panel-panel panel-col-middle">
      <div class="inside"><?php print $content['cen_0']; ?></div>
    </div>
  </div>

  <div class="panel-row columns-3">
    <div class="panel-panel panel-col-first">
      <div class="inside"><?php print $content['lef_1']; ?></div>
    </div>

    <div class="panel-panel panel-col">
      <div class="inside"><?php print $content['mid_1']; ?></div>
    </div>

    <div class="panel-panel panel-col-last">
      <div class="inside"><?php print $content['rig_1']; ?></div>
    </div>
  </div>

  <div class="panel-row columns-1">
    <div class="panel-panel panel-col-bottom">
      <div class="inside"><?php print $content['bot_0']; ?></div>
    </div>
  </div>

</div>
