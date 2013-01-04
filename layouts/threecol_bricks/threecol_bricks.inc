<?php
/**
 * @file
 * Plugin definition.
 */

$plugin = array(
  'title' => t('Three column bricks'),
  'category' => t('Columns: 3'),
  'icon' => 'threecol_bricks.png',
  'theme' => 'panels_threecol_bricks',
  'css' => '../../public/css/layouts/threecol-bricks.css', // Include sass generated css
  'regions' => array(
    'top' => t('Top'),
    'left_above' => t('Left above'),
    'right_above' => t('Right above'),
    'middle_above' => t('Middle above'),
    'middle' => t('Middle'),
    'left_below' => t('Left below'),
    'right_below' => t('Right below'),
    'middle_below' => t('Middle below'),
    'bottom' => t('Bottom'),
  ),
);
