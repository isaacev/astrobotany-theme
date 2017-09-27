<?php

/**
 * This template is rendered at the top of each users' profile page above a
 * collection of all posts on the site attributed to them.
 *
 * This template should be used the main place to include user-specific
 * information like:
 *  - profile picture
 *  - full name
 *  - biography (can be changed within WordPress admin dashboard)
 *  - links to social media, personal site, etc. (not implemented yet)
 */

function get_author_id_from_query () {
  $author_data = get_user_by('slug', get_query_var('author_name'));
  return $author_data->ID;
}

function get_author_name_from_id ($author_id) {
  $display_name = get_the_author_meta('display_name', $author_id);
  $nice_name = get_the_author_meta('user_nicename', $author_id);
  return $display_name ? $display_name : $nice_name;
}

page_header([
  'subheader' => 'All posts by',
  'header'    => get_author_name_from_id(get_author_id_from_query()),
]);
