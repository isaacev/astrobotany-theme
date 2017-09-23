<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <article>
    <h1><?php the_title(); ?></h1>
    <?php if (is_single()): ?>
      <?php the_content(); ?>
    <?php else: ?>
      <?php the_excerpt(); ?>
      <p><a href="<?php the_permalink(); ?>">Read more</a></p>
    <?php endif; ?>
  </article>
  <?php get_template_part('template-parts/util-post-aside'); ?>
</article>
