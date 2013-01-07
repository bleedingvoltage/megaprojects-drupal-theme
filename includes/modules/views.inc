<?php
/**
 * @file
 * Provides views theme override functions.
 */

function megaprojectske_preprocess_views_view_table(&$variables) {
  $vars['classes_array'][] = 'table';
}

function megaprojectske_preprocess_views_view_grid(&$variables) {
  $vars['class'] .= ' table';
}
