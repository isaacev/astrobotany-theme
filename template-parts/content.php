<article>
  <header>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php echo get_the_date(); ?></p>
    <p><?php the_author(); ?></p>
  </header>
  <?php the_excerpt(); ?>
</article>
