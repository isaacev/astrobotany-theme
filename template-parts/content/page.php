<?php

/**
 * This template renders the content for an entire page.
 */

?>

<?php if (is_page()): ?>
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
<?php else: ?>
  <article id="page-<?php the_ID(); ?>">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <article>
      <?php if (get_the_content() === ''): ?>
        <?php get_template_part('template-parts/part/empty'); ?>
      <?php else: ?>
        <?php the_excerpt(); ?>
      <?php endif; ?>
    </article>
  </article>
<?php endif; ?>
