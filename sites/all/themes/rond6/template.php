<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * rond6 theme.
 */

/* remove with and height attributes for images in html output */

function rond6_preprocess_image(&$variables) {
  foreach (array('width', 'height') as $key) {
    unset($variables[$key]);
  }
}
