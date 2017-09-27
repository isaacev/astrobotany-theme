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
