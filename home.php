<?php

get_header();
page_header([
  'header'=> get_the_title(get_option('page_for_posts', true)),
]);

if (have_posts()) {
  while (have_posts()) { the_post();
    get_template_part('template-parts/content/post', get_post_format());
  }

  get_template_part('template-parts/part/pagination');
}

get_footer();
