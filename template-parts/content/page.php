<?php

/**
 * This template renders the content for an entire page.
 */

?>

<?php page_header([
  'header' => get_the_title(),
]); ?>

<article id="page-<?php the_ID(); ?>">
  <?php if (get_the_content() === ''): ?>
    <?php get_template_part('template-parts/part/empty'); ?>
  <?php else: ?>
    <?php the_content(); ?>
  <?php endif; ?>
</article>
