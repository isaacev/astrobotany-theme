<?php

get_header();
get_template_part('template-parts/content/author');

if (have_posts()) {
  while (have_posts()) { the_post();
    get_template_part('template-parts/content/post', get_post_format());
  }

  get_template_part('template-parts/part/pagination');
} else {
  get_template_part('template-parts/part/empty');
}

get_footer();
