<?php

/**
 * Implementation of template preprocess for the view.
 */
function template_preprocess_views_bootstrap_accordion_plugin_style(&$vars) {
  $view = &$vars['view'];
  $title_field = $vars['options']['title_field'];

  // Get option for opening first panel.
  $vars['open_first_panel'] = $vars['options']['open_first_panel'];

  $vars['classes_array'][] = 'panel-group';

  // Get titles.
  if (isset($view->field[$title_field])) {
    foreach (array_keys($vars['rows']) as $key) {
      $vars['titles'][$key] = $view->style_plugin->get_field($key, $title_field);
    }
  }
}
