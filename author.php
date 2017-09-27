<?php

get_header();
get_template_part('template-parts/content', 'author');

if (have_posts()) {
  while (have_posts()) { the_post();
    get_template_part('template-parts/content', get_post_format());
  }

  get_template_part('template-parts/util-pager');
} else {
  echo '<em>Author has not posted yet</em>';
}

get_footer();
