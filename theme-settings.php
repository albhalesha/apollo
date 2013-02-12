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
    '#title'         => t('Slogan Path'),
    '#default_value' => theme_get_setting('apollo_slogan_path'),
    '#description'   => t('This will override the default slogan path.'),
  );
  $form['aether_settings']['branding']['branding_links']['apollo_slogan_title'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Slogan Title'),
    '#default_value' => theme_get_setting('apollo_slogan_title'),
    '#description'   => t('This will override the default slogan alt title.'),
  );
  $form['aether_settings']['responsive_menu'] = array(
    '#title' => t('Responsive Menu'),
    '#type' => 'fieldset',
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#weight' => 13,
  );
  $form['aether_settings']['responsive_menu']['responsive_menu']['apollo_main_menu'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Responsive Main Menu'),
    '#default_value' => theme_get_setting('apollo_main_menu'),
    '#description'   => t('Make the main menu responsive at a certain breakpoint.'),
  );
  $form['aether_settings']['responsive_menu']['responsive_menu']['apollo_resp_main_menu_width'] = array(
    '#type' => 'textfield',
    '#title' => t('Main Menu breakpoint'),
    '#default_value' => theme_get_setting('apollo_resp_main_menu_width'),
    '#size'          => 5,
    '#maxlength'     => 10,
    '#description' => t('If responsive menu is enabled, set a max breakpoint size in px or em.'),
    '#prefix'        => '<div id="div-apollo-breakopoint-collapse">',
  );
}
