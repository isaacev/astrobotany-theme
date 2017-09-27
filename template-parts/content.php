<?php if (is_single()): ?>
  <?php get_page_header(get_the_title()); ?>
<?php endif; ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <article>
    <?php if (is_single()): ?>
      <?php the_content(); ?>
    <?php else: ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>
      <p><a href="<?php the_permalink(); ?>">Read more</a></p>
    <?php endif; ?>
  </article>
  <?php get_template_part('template-parts/util-post-aside'); ?>
</article>
