<?php
/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<?php
  $slides_max = count($rows) / 5;
  $counter = 0;
?>

<?php for ($i = 0; $i < $slides_max; $i++) : ?>
  <div class="item<?php print ($i == 0) ? ' active' : ''; ?>">
    <?php foreach ($rows as $id => $row): ?>
      <?php if ($id < 5 * $counter || $id >= 5 * ($counter + 1)) { continue; } ?>

      <div <?php if ($classes_array[$id]) { print 'class="' . $classes_array[$id] .'"';  } ?>>
        <?php print $row; ?>
      </div>
    <?php endforeach; ?>
  </div>
  <?php $counter++; ?>
<?php endfor; ?>
