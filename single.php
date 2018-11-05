<?php

get_header();

if (have_posts()) {
  while (have_posts()) { the_post();
    get_template_part('partials/post/header');
    if (empty(get_the_content())) {
      get_template_part('partials/post/empty');
    } else {
      get_template_part('partials/post/content');
    }
  }
}

get_footer();
