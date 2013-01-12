<?php
/**
 * @file
 * Template for Pandora.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout.
 */
?>

<div class="panel-display panel-pandora clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="panel-row pandora-container pandora-columns-1">
    <div class="panel-panel pandora-column-1">
      <div class="inside"><?php print $content['11']; ?></div>
    </div>
  </div>

  <div class="panel-row pandora-container pandora-columns-4">
    <div class="panel-panel pandora-column-1">
      <div class="inside"><?php print $content['21']; ?></div>
    </div>
    <div class="panel-panel pandora-column-2">
      <div class="inside"><?php print $content['22']; ?></div>
    </div>
    <div class="panel-panel pandora-column-3">
      <div class="inside"><?php print $content['23']; ?></div>
    </div>
    <div class="panel-panel pandora-column-4">
      <div class="inside"><?php print $content['24']; ?></div>
    </div>
  </div>

  <div class="panel-row pandora-container pandora-columns-3">
    <div class="panel-panel pandora-column-1">
      <div class="inside"><?php print $content['31']; ?></div>
    </div>
    <div class="panel-panel pandora-column-2">
      <div class="inside"><?php print $content['32']; ?></div>
    </div>
    <div class="panel-panel pandora-column-3">
      <div class="inside"><?php print $content['33']; ?></div>
    </div>
  </div>

  <div class="panel-row pandora-container pandora-columns-1">
    <div class="panel-panel pandora-column-1">
      <div class="inside"><?php print $content['41']; ?></div>
    </div>
  </div>

  <div class="panel-row pandora-container pandora-columns-3">
    <div class="panel-panel pandora-column-1">
      <div class="inside"><?php print $content['51']; ?></div>
    </div>
    <div class="panel-panel pandora-column-2">
      <div class="inside"><?php print $content['52']; ?></div>
    </div>
    <div class="panel-panel pandora-column-3">
      <div class="inside"><?php print $content['53']; ?></div>
    </div>
  </div>

  <div class="panel-row pandora-container pandora-columns-1">
    <div class="panel-panel pandora-column-1">
      <div class="inside"><?php print $content['61']; ?></div>
    </div>
  </div>

  <div class="panel-row pandora-container pandora-columns-3">
    <div class="panel-panel pandora-column-1">
      <div class="inside"><?php print $content['71']; ?></div>
    </div>
    <div class="panel-panel pandora-column-2">
      <div class="inside"><?php print $content['72']; ?></div>
    </div>
    <div class="panel-panel pandora-column-3">
      <div class="inside"><?php print $content['73']; ?></div>
    </div>
  </div>

  <div class="panel-row pandora-container pandora-columns-4">
    <div class="panel-panel pandora-column-1">
      <div class="inside"><?php print $content['81']; ?></div>
    </div>
    <div class="panel-panel pandora-column-2">
      <div class="inside"><?php print $content['82']; ?></div>
    </div>
    <div class="panel-panel pandora-column-3">
      <div class="inside"><?php print $content['83']; ?></div>
    </div>
    <div class="panel-panel pandora-column-4">
      <div class="inside"><?php print $content['84']; ?></div>
    </div>
  </div>

  <div class="panel-row pandora-container pandora-columns-1">
    <div class="panel-panel pandora-column-1">
      <div class="inside"><?php print $content['91']; ?></div>
    </div>
  </div>

</div>
