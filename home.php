<?php

get_header();
page_header([
  'header'=> get_the_title(get_option('page_for_posts', true)),
]);

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

get_footer();
