<article>
  <header>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_time(); ?></p>
    <p><?php the_author(); ?></p>
  </header>
  <?php the_excerpt(); ?>
</article>