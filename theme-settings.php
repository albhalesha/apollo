<?php
// Include the definition of aether_settings() and aether_theme_get_default_settings().
include_once './' . drupal_get_path('theme', 'aether') . '/theme-settings.php';


/**
 * Implementation of THEMEHOOK_settings() function.
 *
 * @param $saved_settings
 *   An array of saved settings for this theme.
 * @return
 *   A form array.
 */
function aether_subtheme_settings($saved_settings) {

  // Get the default values from the .info file.
  $defaults = aether_theme_get_default_settings('aether_subtheme');

  // Merge the saved variables and their default values.
  $settings = array_merge($defaults, $saved_settings);

  /*
   * Create the form using Forms API: http://api.drupal.org/api/6
   */
  $form = array();
  /* -- Delete this line if you want to use this setting
  $form['aether_subtheme_example'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Use this sample setting'),
    '#default_value' => $settings['aether_subtheme_example'],
    '#description'   => t("This option doesn't do anything; it's just an example."),
  );
  // */

  // Add the base theme's settings.
  $form += aether_settings($saved_settings, $defaults);

  // Remove some of the base theme's settings.
  unset($form['themedev']['aether_layout']); // We don't need to select the base stylesheet.

  // Return the form
  return $form;
}
