<?php
/**
 * @file
 * Variable API module. Definition for some xample variables
 */

/**
 * Implements hook_variable_info().
 */
function custom_variable_variable_info($options) {
  return $variables;
}

/**
 * Implements hook_variable_group_info().
 */
function custom_variable_variable_group_info() {
  $groups['custom_variable'] = array(
    'title' => t('Custom Variables'),
    'description' => t('Custom Variables'),
    'access' => 'administer site configuration',
    'path' => array('admin/config/system/variable/example'),
  );
  return $groups;
}
