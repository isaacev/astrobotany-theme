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

page_header([
  'subheader' => 'All posts by',
  'header'    => get_author_name_from_id(get_author_id_from_query()),
]);
