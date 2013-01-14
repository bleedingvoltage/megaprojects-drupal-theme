<?php
/**
 * @file
 * Provides views theme override functions.
 */

function megaprojectske_preprocess_views_view_table(&$variables) {
  $variables['classes_array'][] = 'table';
}

function megaprojectske_preprocess_views_view_grid(&$variables) {
  $variables['class'] .= ' table';
}
