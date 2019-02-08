<?php

/**
 * Implementation of hook_theme().
 */
function custom_admin_theme() {
  $items = array();

  // Content theming.
  $items['help'] =
  $items['node'] =
  $items['comment'] =
  $items['comment_wrapper'] = array(
    'path' => drupal_get_path('theme', 'custom_admin') .'/templates',
    'template' => 'object',
  );
  $items['node']['template'] = 'node';

  // Help pages really need help. See preprocess_page().
  $items['help_page'] = array(
    'variables' => array('content' => array()),
    'path' => drupal_get_path('theme', 'custom_admin') .'/templates',
    'template' => 'object',
    'preprocess functions' => array(
      'template_preprocess',
      'rubik_preprocess_help_page',
    ),
    'process functions' => array('template_process'),
  );

  if (!theme_get_setting('rubik_disable_sidebar_in_form')) {
    // Form layout: default (2 column).
    $items['block_add_block_form'] =
    $items['block_admin_configure'] =
    $items['comment_form'] =
    $items['contact_admin_edit'] =
    $items['contact_mail_page'] =
    $items['contact_mail_user'] =
    $items['filter_admin_format_form'] =
    $items['forum_form'] =
    $items['locale_languages_edit_form'] =
    $items['menu_edit_menu'] =
    $items['menu_edit_item'] =
    $items['node_type_form'] =
    $items['path_admin_form'] =
    $items['system_settings_form'] =
    $items['system_themes_form'] =
    $items['system_modules'] =
    $items['system_actions_configure'] =
    $items['taxonomy_form_term'] =
    $items['taxonomy_form_vocabulary'] =
    $items['user_admin_access_add_form'] = array(
      'render element' => 'form',
      'path' => drupal_get_path('theme', 'custom_admin') .'/templates',
      'template' => 'form-default',
      'preprocess functions' => array(
        'rubik_preprocess_form_buttons',
      ),
    );

    // These forms require additional massaging.
    $items['confirm_form'] = array(
      'render element' => 'form',
      'path' => drupal_get_path('theme', 'custom_admin') .'/templates',
      'template' => 'form-simple',
      'preprocess functions' => array(
        'rubik_preprocess_form_confirm'
      ),
    );
  }

  $items['user_register_form'] =
  $items['user_profile_form'] =
  $items['node_form'] = array(
    'render element' => 'form',
    'path' => drupal_get_path('theme', 'custom_admin') .'/templates',
    'template' => 'form-generic',
    'preprocess functions' => array(
      'rubik_preprocess_form_buttons',
      'rubik_preprocess_form_node',
    ),
  );

  return $items;
}

/**
 * Preprocessor for theme('fieldset').
 */
function custom_admin_preprocess_fieldset(&$vars)
{
  if (!empty($vars['element']['#collapsible'])) $vars['title'] = "<span class='icon'></span>" . $vars['title'];
  foreach ($vars['element'] as $k => $v) {
    if (is_array($v) && $v['#id']) $fs++;
//    if (isset($v['#type'])) {
//      if ($v['#type'] == 'fieldset' && $v['#collapsible'] == FALSE) $fs++;
//      else if ($v['#type'] == 'container') $fs++;
//      if (isset($v['#type']['#id'])) $fs++;
//    }
  }
  if ($fs == 1) $vars['attributes']['class'][] = 'one-child';
//  dpm($vars['element'], $fs);
}
