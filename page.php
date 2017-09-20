<?php get_header(); ?>
<h1>page.php</h1>
<?php while (have_posts()): the_post();
  echo '<h2>has post</h2>';
  get_template_part('template-parts/content', 'page');
endwhile; ?>

<?php get_footer(); ?>
