<?php

function astrobotany_setup () {
  $loc  = 'primary';
  $desc = 'Navigation menu in header of each page';
  register_nav_menu($loc, $desc);
  add_theme_support('html5');
}

add_action('after_setup_theme', 'astrobotany_setup');

function enqueue_styles () {
  $handle = 'font-open-sans';
  $src    = 'https://fonts.googleapis.com/css?family=Open+Sans:400,700';
  $deps   = array();
  $ver    = false;
  wp_enqueue_style($handle, $src, $deps, $ver);

  $handle = 'font-lato';
  $src    = 'https://fonts.googleapis.com/css?family=Lato:400,400i,700';
  $deps   = array();
  $ver    = false;
  wp_enqueue_style($handle, $src, $deps, $ver);

  $handle = 'font-questrial';
  $src    = 'https://fonts.googleapis.com/css?family=Questrial';
  $deps   = array();
  $ver    = false;
  wp_enqueue_style($handle, $src, $deps, $ver);

  $handle = 'main';
  $src    = get_template_directory_uri() . '/styles/css/main.css';
  $deps   = array('font-open-sans');
  $ver    = 'v1.0.3';
  wp_enqueue_style($handle, $src, $deps, $ver);
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

function page_header ($args) {
  echo '<header class="page-header">';
  echo '<h1>';

  if (array_key_exists('subheader', $args)) {
    echo '<span class="subheader">';
    echo esc_html($args['subheader']);
    echo '</span>';
  }

  echo '<span class="header">';
  echo esc_html($args['header']);
  echo '</span>';
  echo '</h1>';
  echo '</header>';
}

function print_author_profile_url () {
  $author_id = get_the_author_meta('ID');
  echo get_author_posts_url($author_id);
}

function print_author_profile_picture_url () {
  $author_id = get_the_author_meta('ID');
  echo get_avatar_url($author_id, [
    'size' => 64,
  ]);
}

function get_author_id_from_query () {
  $author_data = get_user_by('slug', get_query_var('author_name'));
  return $author_data->ID;
}

function get_author_name_from_id ($author_id) {
  $display_name = get_the_author_meta('display_name', $author_id);
  $nice_name = get_the_author_meta('user_nicename', $author_id);
  return $display_name ? $display_name : $nice_name;
}

function print_author_name () {
  $display_name = get_the_author_meta('display_name');
  $nice_name = get_the_author_meta('nicename');

  if ($display_name) {
    echo $display_name;
  } else {
    echo $nice_name;
  }
}

function print_post_date () {
  $format = 'M j<\s\u\p>S</\s\u\p> Y';
  echo get_the_date($format);
}

function print_pagination_links ($args) {
  $wrapper_default  = $args['default']  ? $args['default']  : '%s';
  $wrapper_active   = $args['active']   ? $args['active']   : '%s';
  $wrapper_prev     = $args['prev']     ? $args['prev']     : '%s';
  $wrapper_next     = $args['next']     ? $args['next']     : '%s';
  $wrapper_ellipsis = $args['ellipsis'] ? $args['ellipsis'] : '%s';
  $link_working     = '<a href="%s">%s</a>';
  $link_disabled    = '<a class="disabled">%s</a>';

  global $wp_query;
  $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
  $max = intval($wp_query->max_num_pages);

  // Add current page to list of linked pages.
  if ($paged >= 1) {
    $links[] = $paged;
  }

  // Add pages before current page to list of linked pages.
  if ($paged >= 3) {
    $links[] = $paged - 1;
  }

  // Add pages after current page to list of linked pages.
  if (($paged + 2) <= $max) {
    $links[] = $paged + 1;
  }

  // Previous post link.
  if (get_previous_posts_link()) {
    $url = previous_posts(0, false);
    printf($link_working, $url, $wrapper_prev);
  } else {
    printf($link_disabled, $wrapper_prev);
  }

  // Render link to first page and render ellipses if necessary.
  if (!in_array(1, $links)) {
    $url     = esc_url(get_pagenum_link(1));
    $text    = '1';
    $format  = (1 == $paged) ? $wrapper_active : $wrapper_default;
    $content = sprintf($format, $text);
    printf($link_working, $url, $content);

    if (!in_array(2, $links)) {
      printf($wrapper_ellipsis);
    }
  }

  // Link to current page and 2 pages in either direction if necessary.
  sort($links);
  foreach ((array) $links as $link) {
    $url     = esc_url(get_pagenum_link($link));
    $text    = $link;
    $format  = ($paged == $link) ? $wrapper_active : $wrapper_default;
    $content = sprintf($format, $text);
    printf($link_working, $url, $content);
  }

  // Render link to last page and render ellipses if necessary.
  if (!in_array($max, $links)) {
    if (!in_array($max - 1, $links)) {
      printf($wrapper_ellipsis);
    }

    $url     = esc_url(get_pagenum_link($max));
    $text    = $max;
    $format  = ($paged == $max) ? $wrapper_active : $wrapper_default;
    $content = sprintf($format, $text);
    printf($link_working, $url, $content);
  }

  // Next post link.
  if (get_next_posts_link()) {
    $url = next_posts(0, false);
    printf($link_working, $url, $wrapper_next);
  } else {
    printf($link_disabled, $wrapper_next);
  }
}

function print_tags () {
  $tags = get_the_tags();

  if (is_array($tags) === false) {
    return;
  }

  echo '<p class="tags">';

  foreach ($tags as $tag) {
    $id   = $tag->term_id;
    $url  = get_tag_link($id);
    $name = $tag->name;
    printf('<a id="tag-%s" class="tag" href="%s">%s</a> ', $id, $url, $name);
  }

  echo '</p>';
}
