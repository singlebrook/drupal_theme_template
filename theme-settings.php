<?php

/**
 * Implements hook_form_system_theme_settings_alter()
 */
function drupal_theme_template_form_system_theme_settings_alter(&$form, $form_state) {
  $form['dtt_enable_livereload'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Enable livereload'),
    '#default_value' => theme_get_setting('dtt_enable_livereload'),
    '#description'   => t("For development use only."),
  );
}
