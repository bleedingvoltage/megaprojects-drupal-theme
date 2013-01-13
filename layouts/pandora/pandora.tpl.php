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

  <?php if ($content['11']) : ?>
    <div class="panel-row pandora-container pandora-columns-1">
      <div class="panel-panel pandora-column-1">
        <div class="inside"><?php print $content['11']; ?></div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($content['21'] || $content['22'] || $content['23'] || $content['24']) : ?>
    <div class="panel-row pandora-container pandora-columns-4">
      <?php if ($content['21']) : ?>
        <div class="panel-panel pandora-column-1">
          <div class="inside"><?php print $content['21']; ?></div>
        </div>
      <?php endif; ?>
      <?php if ($content['22']) : ?>
        <div class="panel-panel pandora-column-2">
          <div class="inside"><?php print $content['22']; ?></div>
        </div>
      <?php endif; ?>
      <?php if ($content['23']) : ?>
        <div class="panel-panel pandora-column-3">
          <div class="inside"><?php print $content['23']; ?></div>
        </div>
      <?php endif; ?>
      <?php if ($content['24']) : ?>
        <div class="panel-panel pandora-column-4">
          <div class="inside"><?php print $content['24']; ?></div>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <?php if ($content['31'] || $content['32'] || $content['33']) : ?>
    <div class="panel-row pandora-container pandora-columns-3">
      <?php if ($content['31']) : ?>
        <div class="panel-panel pandora-column-1">
          <div class="inside"><?php print $content['31']; ?></div>
        </div>
      <?php endif; ?>
      <?php if ($content['32']) : ?>
        <div class="panel-panel pandora-column-2">
          <div class="inside"><?php print $content['32']; ?></div>
        </div>
      <?php endif; ?>
      <?php if ($content['33']) : ?>
        <div class="panel-panel pandora-column-3">
          <div class="inside"><?php print $content['33']; ?></div>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <?php if ($content['41']) : ?>
    <div class="panel-row pandora-container pandora-columns-1">
      <div class="panel-panel pandora-column-1">
        <div class="inside"><?php print $content['41']; ?></div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($content['51'] || $content['52'] || $content['53']) : ?>
    <div class="panel-row pandora-container pandora-columns-3">
      <?php if ($content['51']) : ?>
        <div class="panel-panel pandora-column-1">
          <div class="inside"><?php print $content['51']; ?></div>
        </div>
      <?php endif; ?>
      <?php if ($content['52']) : ?>
        <div class="panel-panel pandora-column-2">
          <div class="inside"><?php print $content['52']; ?></div>
        </div>
      <?php endif; ?>
      <?php if ($content['53']) : ?>
        <div class="panel-panel pandora-column-3">
          <div class="inside"><?php print $content['53']; ?></div>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <?php if ($content['61']) : ?>
    <div class="panel-row pandora-container pandora-columns-1">
      <div class="panel-panel pandora-column-1">
        <div class="inside"><?php print $content['61']; ?></div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($content['71'] || $content['72'] || $content['73']) : ?>
    <div class="panel-row pandora-container pandora-columns-3">
      <?php if ($content['71']) : ?>
        <div class="panel-panel pandora-column-1">
          <div class="inside"><?php print $content['71']; ?></div>
        </div>
      <?php endif; ?>
      <?php if ($content['72']) : ?>
        <div class="panel-panel pandora-column-2">
          <div class="inside"><?php print $content['72']; ?></div>
        </div>
      <?php endif; ?>
      <?php if ($content['73']) : ?>
        <div class="panel-panel pandora-column-3">
          <div class="inside"><?php print $content['73']; ?></div>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <?php if ($content['81'] || $content['82'] || $content['83'] || $content['84']) : ?>
    <div class="panel-row pandora-container pandora-columns-4">
      <?php if ($content['81']) : ?>
        <div class="panel-panel pandora-column-1">
          <div class="inside"><?php print $content['81']; ?></div>
        </div>
      <?php endif; ?>
      <?php if ($content['82']) : ?>
        <div class="panel-panel pandora-column-2">
          <div class="inside"><?php print $content['82']; ?></div>
        </div>
      <?php endif; ?>
      <?php if ($content['83']) : ?>
        <div class="panel-panel pandora-column-3">
          <div class="inside"><?php print $content['83']; ?></div>
        </div>
      <?php endif; ?>
      <?php if ($content['84']) : ?>
        <div class="panel-panel pandora-column-4">
          <div class="inside"><?php print $content['84']; ?></div>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <?php if ($content['91']) : ?>
    <div class="panel-row pandora-container pandora-columns-1">
      <div class="panel-panel pandora-column-1">
        <div class="inside"><?php print $content['91']; ?></div>
      </div>
    </div>
  <?php endif; ?>

</div>
