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
  'css' => '../../public/css/layouts/threecol-bricks.css',
  'regions' => array(
    'bot_0' => t('Bottom 0'),
    'cen_0' => t('Center 0'),
    'col_0' => t('Column 0'),
    'col_1' => t('Column 1'),
    'col_2' => t('Column 2'),
    'col_3' => t('Column 3'),
    'col_4' => t('Column 4'),
    'lef_0' => t('Left 0'),
    'lef_1' => t('Left 1'),
    'mid_0' => t('Middle 0'),
    'mid_1' => t('Middle 1'),
    'rig_0' => t('Right 0'),
    'rig_1' => t('Right 1'),
    'top_0' => t('Top 0'),
    'top_1' => t('Top 1'),
  ),
);
