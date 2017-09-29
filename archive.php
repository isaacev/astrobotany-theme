<?php

get_header();
page_header([
  'header'=> get_the_archive_title(),
]);

if (have_posts()) {
  while (have_posts()) { the_post();
    get_template_part('template-parts/content/post', get_post_format());
  }

  get_template_part('template-parts/part/pagination');
}

get_footer();
