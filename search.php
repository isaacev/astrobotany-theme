<?php

get_header();
get_page_header('&lsquo;' . get_search_query() . '&rsquo;', 'Search results for');

if (have_posts()) {
  while (have_posts()) { the_post();
    get_template_part('template-parts/content', get_post_format());
  }

  get_template_part('template-parts/util-pager');
}

get_footer();
