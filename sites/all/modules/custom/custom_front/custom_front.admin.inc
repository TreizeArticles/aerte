<?php

/**
 * Form for configuring front page settings.
 */
function custom_front_admin_form($form, &$form_state) {

  $form['front_page_enable'] = array(
    '#type' => 'checkbox',
    '#title' => t('Front Page Override'),
    '#description' => t('Enable this if you want the front page module to manage the home page.'),
    '#default_value' => variable_get('front_page_enable', 0),
  );

  $form['roles'] = array(
    '#tree' => TRUE,
    '#type' => 'fieldset',
    '#title' => t('Roles'),
    '#collapsible' => FALSE,
  );

  $roles = user_roles();
	$languages = language_list('enabled');
	
  foreach ($roles as $rid => $role) {
		$form['roles'][$rid] = array(
			'#type' => 'fieldset',
			'#collapsible' => TRUE,
			'#collapsed' => TRUE,
			'#title' => t('Front Page for !rolename', array('!rolename' => $role)),
		);	
	
		foreach ($languages[1] as $lid => $lang) {
			$var = "front_page_path_{$rid}_{$lid}";
		
			$form['roles'][$rid]['path'][$lid] = array(
				'#type' => 'textfield',
				'#title' => t('Path (!lang)', array('!lang' => $lid)),
				'#default_value' => variable_get($var, ''),
			);
    }
  }

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Save Settings'),
  );

  return $form;
}


function custom_front_admin_form_submit($form, &$form_state) {
	variable_set('front_page_enable', $form_state['values']['front_page_enable']);

	foreach ($form_state['values']['roles'] as $rid => $role) {
		foreach ($role['path'] as $lid => $path) {
			$var = "front_page_path_{$rid}_{$lid}";
			variable_set($var, $path);
		}
	}
}