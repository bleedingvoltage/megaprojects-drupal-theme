<?php
/**
 * @file
 * Provides views theme override functions.
 */

function megaprojectske_preprocess_views_view_table(&$vars) {
  $vars['classes_array'][] = 'table';
}

function megaprojectske_preprocess_views_view_grid(&$vars) {
  $vars['class'] .= ' table';
}
