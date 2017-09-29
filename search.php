<?php

get_header();
get_page_header('&lsquo;' . get_search_query() . '&rsquo;', 'Search results for');

if (have_posts()) {
  while (have_posts()) { the_post();
    // FIXME: should handle any content type, page, post, etc.
    get_template_part('template-parts/content/post');
  }

  get_template_part('template-parts/part/pagination');
}

get_footer();
