<?php

function enqueue_styles () {
  $handle = 'main';
  $src    = get_template_directory_uri() . '/css/main.css';
  $deps   = array();
  $ver    = false;
  wp_enqueue_style($handle, $src, $deps, $ver);
}

add_action('wp_enqueue_scripts', 'enqueue_styles');
