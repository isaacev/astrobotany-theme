<?php

get_header();

if (has_post_thumbnail()) {
  get_template_part('template-parts/part/banner');
} else {
  page_header([
    'header' => get_the_title(),
  ]);
}

echo '<section id="posts">';

$is_first_sticky_post = true;

if (have_posts()) {
  while (have_posts()) { the_post();
    if (is_sticky() && $is_first_sticky_post) {
      $is_first_sticky_post = false;
      get_template_part('template-parts/content/featured', get_post_format());
    } else {
      get_template_part('template-parts/content/post', get_post_format());
    }
  }

  get_template_part('template-parts/part/pagination');
}

echo '</section>';
get_template_part('template-parts/part/sidebar');
get_footer();
