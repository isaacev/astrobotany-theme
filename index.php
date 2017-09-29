<?php

get_header();

if (have_posts()) {
  while (have_posts()) { the_post();
    // FIXME: should handle any content type, page, post, etc.
    get_template_part('template-parts/content/post');
  }

  get_template_part('template-parts/part/pagination');
}

get_footer();
