<?php

function astrobotany_setup () {
  $loc  = 'primary';
  $desc = 'Navigation menu in header of each page';
  register_nav_menu($loc, $desc);
}

add_action('after_setup_theme', 'astrobotany_setup');

function enqueue_styles () {
  $handle = 'font-open-sans';
  $src    = 'https://fonts.googleapis.com/css?family=Open+Sans:400,700';
  $deps   = array();
  $ver    = false;
  wp_enqueue_style($handle, $src, $deps, $ver);

  $handle = 'main';
  $src    = get_template_directory_uri() . '/styles/css/main.css';
  $deps   = array('font-open-sans');
  $ver    = false;
  wp_enqueue_style($handle, $src, $deps, $ver);
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

function get_page_header ($header, $subheader = null) {
  echo '<header class="page-header">';
  echo   '<h1>';
  if (isset($subheader)) {
    echo   '<span class="subheader">' . $subheader . '</span>';
  }
  echo     '<span class="header">' . $header . '</span>';
  echo   '</h1>';
  echo '</header>';
}

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
