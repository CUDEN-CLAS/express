<?php

/**
 * @file
 * Admin menus for webauth module
 *
 */

/**
 * Base webauth settings form
 */

function cudenver_search_admin_settings($form, &$form_state) {
  $form['cudenver_search_engine_id'] = array(
    '#type'  => 'textfield',
    '#title' => 'Google Custom Search Engine ID',
    '#size'  => 80,
    '#maxlength' => 255,
    '#default_value' => variable_get('cudenver_search_engine_id','018357517236236256036:g2zbfe5wvsy'),
    '#description' => t('The custom search engine&rsquo;s unique ID'),
  );
  $form['cudenver_search_engine_results_page'] = array(
  '#type'  => 'textfield',
  '#title' => 'Google Custom Search Results Page',
  '#size'  => 80,
  '#maxlength' => 255,
  '#default_value' => variable_get('cudenver_search_engine_results_page','/search'),
  '#description' => t('The search page path, with preceding slash (e.g. /search) where results should appear'),
);
  return system_settings_form($form);
}
