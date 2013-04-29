<?php

/**
 * Adds the livereload javascript so we don't need the browser extension.
 */

  if (theme_get_setting('dtt_enable_livereload')==true) {
    global $base_url;

    $output = $base_url . '/';
    $output .= drupal_get_path('theme', 'drupal_theme_template') . '/js/livereload.js?';
    //  $output .= 'host=' . parse_url($base_url, PHP_URL_HOST);
    $output .= 'host=' . 'localhost';
    $output .= '&port=' . 35777; // Different port than the default livereload.
    $output .= '&snipver=' . 1;
    $output .= '&mindelay' . 1000;
    $output .= '&maxdelay' . 60000;

    drupal_add_js($output, 'external');
  }
