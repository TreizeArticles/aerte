<?php

/**
 * @file
 * The functions in this file are used by the Internal Links filter as part of
 * the process of the handling the "title filter". Moving some of the functions
 * to separate files helps to streamline the code, especially for users who are
 * only using one of the filters and makes it more "ready for the future", when
 * additional filters could be added to this set.
 *
 * @author Lowell Montgomery | Cocomore AG
 *   @see http://drupal.org/user/628196
 */

include_once 'intlinks_common_functions.inc';

/**
 * Process regex matches of links for intlinks_title_filter_process().
 *
 * If no changes should be made (e.g. if link is external or already has a
 * title), the function simply returns $matches[0], the unchanged link.
 *
 * Example link $matches array for link with no title (external):
 * [0]: <a href="http://www.newsoftheweird.com/archive/index.html">
 * [1]: href="http://www.newsoftheweird.com/archive/index.html"
 * [2]: http://www.newsoftheweird.com/archive/index.html
 *
 * Example link $matches array for link with no title (internal):
 * [0]: <a href="/articles/random-content">
 * [1]:  href="/articles/random-content"  [2]: /articles/random-content
 *
 * Example link with existing title (internal)
 * [0]: <a href="/node/2" title="Weird News Article - Node 2 - Custom Title">
 * [1]: href="/node/2" title="Weird News Article - Node 2 - Custom Title"
 * [2]: /node/2
 *
 * @param $matches
 *   Parameter passed by intlinks_title_filter_process();
 *   an array from a regex match to an HTML link.
 *
 * @return
 *   Original link, possibly modified to include HTML title="value" attribute
 *   and/or URL path alias if link passed was, e.g. <a href="/node/123">.
 */
function _intlinks_title_process_link($matches, $langcode) {
  static $language_list = array();
  if (empty($language_list)) {
    $language_list = language_list();
  }

  $parts = parse_url($matches[2]);
  // Path has to be relative.
  // Do nothing if the link is not internal (root rel or doc rel).
  // Do nothing if there is no path, either
  if (!array_key_exists('host', $parts) && !empty($parts['path'])) {
    $parts['path'] = trim($parts['path'], '/');
    if (preg_match('@node/\d+$@', $parts['path'])) {
      // If an HTML title attribute already exists...
      if (!preg_match('@title="[^"]+?"@', $matches[1])) {
        // get title
        // first, we try entity translation with title field
        $nid = str_replace('node/', '', $parts['path']);
        $query = new EntityFieldQuery();
        $result = $query->entityCondition('entity_type', 'node')
          ->entityCondition('entity_id', $nid)
          ->execute();
        if (isset($result['node'])) {
          $title = '';
          $node_stub = reset($result['node']);
          $fields = field_info_instances('node', $node_stub->type);
          if (array_key_exists('title_field', $fields)) {
            $field_id = $fields['title_field']['field_id'];
            field_attach_load('node', $result['node'], FIELD_LOAD_CURRENT, array('field_id' => $field_id));
            $node_stub = reset($result['node']);
            if (array_key_exists($langcode, $node_stub->title_field)) {
              $title = $node_stub->title_field[$langcode][0]['safe_value'];
            }
          }

          // fallback: node translation
          if (empty($title)) {
            if ($result = db_select('node', 'n')
              ->fields('n', array('title'))
              ->condition('nid', $nid)
              ->execute()
            ) {
              $title = check_plain($result->fetchField());
            }
          }

          $matches[0] = str_replace($matches[1],
            $matches[1] . ' title="' . $title . '"',
            $matches[0]);
        }
      }

      $alias_url = url($parts['path'], array(
        'language' => $language_list[$langcode],
        'absolute' => FALSE,
      )) .
        // Add query and fragment manually because they're already encoded
        (array_key_exists('query', $parts) ? '?' . $parts['query'] : '') .
        (array_key_exists('fragment', $parts) ? '#' . $parts['fragment'] : '');

      $matches[0] = str_replace($matches[2], $alias_url, $matches[0]);
    }
  }
  return $matches[0];
}
