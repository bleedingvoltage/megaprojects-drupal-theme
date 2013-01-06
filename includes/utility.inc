<?php
/**
 * @file
 * Miscellaneous functions.
 */

function megaprojectske_image_field_view_value($entity, $field_name, $image_style, $type = 'image') {
  return field_view_field('node', $entity, $field_name, array(
    'label' => 'hidden',
    'type' => $type,
    'settings' => array(
      'image_style' => $image_style,
    ),
  ));
}

function megaprojectske_smart_trim_field_view_value($entity, $field_name, $trim_length, $more_link = false, $more_text = 'Read more', $trim_type = 'chars', $trim_suffix = '...') {
  return field_view_field('node', $entity, $field_name, array(
    'label' => 'hidden',
    'type' => 'smart_trim_format',
    'settings' => array(
      'trim_length' => $trim_length,
      'trim_type' => $trim_type,
      'trim_suffix' => $trim_suffix,
      'more_link' => $more_link,
      'more_text' => $more_text,
      'summary_handler' => 'ignore',
      'trim_options' => array(
        'text' => TRUE,
      ),
    ),
  ));
}
