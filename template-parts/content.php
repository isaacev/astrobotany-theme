<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <article>
    <?php if (is_single()): ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    <?php else: ?>
      <h2><?php the_title(); ?></h2>
      <?php the_excerpt(); ?>
      <p><a href="<?php the_permalink(); ?>">Read more</a></p>
    <?php endif; ?>
  </article>
  <?php get_template_part('template-parts/util-post-aside'); ?>
</article>
