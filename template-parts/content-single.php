<article>
  <header>
    <h1><?php the_title(); ?></h1>
    <p><?php echo get_the_date(); ?></p>
    <p><?php the_author(); ?></p>
  </header>
  <?php the_content(); ?>
</article>
