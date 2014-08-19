<?php
/**
 * Clean up the_excerpt()
 */
function webbsmith_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'webbsmith') . '</a>';
}
add_filter('excerpt_more', 'webbsmith_excerpt_more');

/**
 * Manage output of wp_title()
 */
function webbsmith_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'webbsmith_wp_title', 10);
