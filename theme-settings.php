<?php

/**
 * Implements hook_form_system_theme_settings_alter() function.
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function megaprojectske_form_system_theme_settings_alter(&$form, $form_state, $form_id = NULL) {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  // Create the form using Forms API
  $form['support'] = array(
    '#type' => 'fieldset',
    '#title' => t('Accessibility and support settings'),
  );
  $form['support']['megaprojectske_skip_link_anchor'] = array(
    '#type' => 'textfield',
    '#title' => t('Anchor ID for the “skip link”'),
    '#default_value' => theme_get_setting('megaprojectske_skip_link_anchor'),
    '#field_prefix' => '#',
    '#description' => t('Specify the HTML ID of the element that the accessible-but-hidden “skip link” should link to. (<a href="!link">Read more about skip links</a>.)', array('!link' => 'http://drupal.org/node/467976')),
  );
  $form['support']['megaprojectske_skip_link_text'] = array(
    '#type' => 'textfield',
    '#title' => t('Text for the “skip link”'),
    '#default_value' => theme_get_setting('megaprojectske_skip_link_text'),
    '#description' => t('For example: <em>Jump to navigation</em>, <em>Skip to content</em>'),
  );
  $form['support']['megaprojectske_html5_respond_meta'] = array(
    '#type' => 'checkboxes',
    '#title' => t('Add HTML5 and responsive scripts and meta tags to every page.'),
    '#default_value' => theme_get_setting('megaprojectske_html5_respond_meta'),
    '#options' => array(
      'respond' => t('Add Respond.js JavaScript to add basic CSS3 media query support to IE 6-8.'),
      'html5' => t('Add HTML5 shim JavaScript to add support to IE 6-8.'),
      'meta' => t('Add meta tags to support responsive design on mobile devices.'),
    ),
    '#description' => t('IE 6-8 require a JavaScript polyfill solution to add basic support of HTML5 and CSS3 media queries. If you prefer to use another polyfill solution, such as <a href="!link">Modernizr</a>, you can disable these options. Mobile devices require a few meta tags for responsive designs.', array('!link' => 'http://www.modernizr.com/')),
  );
}
