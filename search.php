<?php

get_header();
page_header([
  'subheader' => 'Search results for',
  'header'    => '&lsquo;' . get_search_query() . '&rsquo;',
]);

if (have_posts()) {
  while (have_posts()) { the_post();
    if (get_post_type() === 'post') {
      get_template_part('template-parts/content/post', get_post_format());
    } else if (get_post_type() === 'page') {
      get_template_part('template-parts/content/page');
    } else {
      get_template_part('template-parts/content/excerpt');
    }
  }

  get_template_part('template-parts/part/pagination');
} else {
  get_template_part('template-parts/part/empty');
}

get_footer();
