<?php

/**
 * @file
 * Implimentation of hook_form_system_theme_settings_alter()
 *
 * To use replace "apollo" with your themeName and uncomment by
 * deleting the comment line to enable.
 *
 * @param $form: Nested array of form elements that comprise the form.
 * @param $form_state: A keyed array containing the current state of the form.
 */


function apollo_form_system_theme_settings_alter(&$form,&$form_state) {
  $form['aether_settings']['branding'] = array(
    '#title' => t('Branding Options'),
    '#type' => 'fieldset',
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#weight' => 12,
  );
  $form['aether_settings']['branding']['branding_links']['apollo_logo_path'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Logo Path'),
    '#default_value' => theme_get_setting('apollo_logo_path'),
    '#description'   => t('This will override the default logo path.'),
  );
  $form['aether_settings']['branding']['branding_links']['apollo_logo_title'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Logo Title'),
    '#default_value' => theme_get_setting('apollo_logo_title'),
    '#description'   => t('This will override the default logo alt title.'),
  );
  $form['aether_settings']['branding']['branding_links']['apollo_slogan_path'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Logo Path'),
    '#default_value' => theme_get_setting('apollo_slogan_path'),
    '#description'   => t('This will override the default slogan path.'),
  );
  $form['aether_settings']['branding']['branding_links']['apollo_slogan_title'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Logo Title'),
    '#default_value' => theme_get_setting('apollo_slogan_title'),
    '#description'   => t('This will override the default slogan alt title.'),
  );
}
