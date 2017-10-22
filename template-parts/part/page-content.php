<?php

/**
 * This template renders the content of a page. This template does not render
 * the page's header. That is typically handled in the "page-header.php" file.
 */

?>

<?php if (is_page()): ?>
  <article id="page-<?php the_ID(); ?>" class="copy">
    <?php if (get_the_content() === ''): ?>
      <?php get_template_part('template-parts/part/empty'); ?>
    <?php else: ?>
      <?php the_content(); ?>
    <?php endif; ?>
  </article>
<?php else: ?>
  <article id="page-<?php the_ID(); ?>">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <article class="copy">
      <?php if (get_the_content() === ''): ?>
        <?php get_template_part('template-parts/part/empty'); ?>
      <?php else: ?>
        <?php the_excerpt(); ?>
      <?php endif; ?>
    </article>
  </article>
<?php endif; ?>
