<?php

/**
 * Template Name: Post Overlay Template
 * Template Post Type: post
 */

get_template_part('template-parts/head');

if (have_posts()) {
  while (have_posts()) { the_post();
    get_template_part('template-parts/content/post-overlay', get_post_format());
  }
}

get_footer();
