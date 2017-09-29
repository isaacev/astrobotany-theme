<?php

/**
 * This template renders pagination links for the blog page or other long
 * archives to navigate between the chronological pages.
 */

function query_has_multiple_pages () {
  global $wp_query;
  return $wp_query->max_num_pages > 1;
}

?>

<?php if (is_singular() === false || query_has_multiple_pages()): ?>
  <nav class="pagination">
    <?php print_pagination_links([
      'default'  => '<span class="link">%s</span>',
      'active'   => '<span class="link active">%s</span>',
      'prev'     => '<span class="link prev">&#10094;</span>',
      'next'     => '<span class="link next">&#10095;</span>',
      'ellipsis' => '<span class="link ellipsis">&hellip;</span>',
    ]); ?>
  </nav>
<?php endif; ?>
