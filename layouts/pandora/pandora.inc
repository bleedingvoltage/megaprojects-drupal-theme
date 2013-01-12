<?php
/**
 * @file
 * Panels layout plugin for the Pandora panels layout.
 */

$plugin = array(
  'title' => t('Pandora'),
  'category' => t('MegaProjects Kenya'),
  'icon' => 'pandora.png',
  'theme' => 'pandora',
  'css' => 'pandora.css',
  'regions' => array(
    '11' => t('Header'),
    '21' => t('Top left'),
    '22' => t('Top center left'),
    '23' => t('Top center right'),
    '24' => t('Top right'),
    '31' => t('Middle top left'),
    '32' => t('Middle top center'),
    '33' => t('Middle top right'),
    '41' => t('Middle top'),
    '51' => t('Middle left'),
    '52' => t('Middle center'),
    '53' => t('Middle right'),
    '61' => t('Middle bottom'),
    '71' => t('Middle bottom left'),
    '72' => t('Middle bottom center'),
    '73' => t('Middle bottom right'),
    '81' => t('Bottom left'),
    '82' => t('Bottom center left'),
    '83' => t('Bottom center right'),
    '84' => t('Bottom right'),
    '91' => t('Footer'),
  ),
);
